let web3;

const contractAddress = "0x9b3b0C76f1f8465451722D17c18fC9F0024BF90B";
const usdtAddress = "0x55d398326f99059fF775485246999027B3197955";
const busdAddress = "0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56";
const usdcAddress = "0x8AC76a51cc950d9822D68b83fE1Ad97B32Cd580d";

var spAccount = "0x0040473E86141EfD5009e77511d63578D7068cA3";


var defaultAccount;
var prevAccount;

var contract;
var usdt;
var usdc;
var busd;
var gmt;

var allowance_usdt;
var allowance_usdc;
var allowance_busd;

var bnb_balance;
var usdt_balance;
var usdc_balance;
var busd_balance;

var myBNB = 0;
var myUSDT = 0;
var myUSDC = 0;
var myBUSD = 0;
var myGMT = 0;
var bnbRate = 0;
var dividends;
var numDeposits = 0;
var numDownlines1 = 0;
var numDownlines2 = 0;
var numDownlines3 = 0;
var numDownlines4 = 0;
var structure;

var lastPayout = 0;
var lastDeposit = 0;
var nextpayout = 0;

var myDeposits = 0;
var myWithdrawn = 0;
var myReinvests = 0;
var myRewards = 0;

var isMobile = false;
var hasWeb3 = false;

var contractIsLoaded = false;
var accountIsLoaded = false;

var appPath = '';

window.addEventListener('load', Connect)
async function Connect() {
	
    if (window.ethereum) 
	{
        console.log('Ethereum Detected!');	
		web3 = new web3js.myweb3(window.ethereum);
        try {
            await ethereum.enable()

            let accounts = await web3.eth.getAccounts()
            defaultAccount = accounts[0]
			
			anyUpdate();
		    
			hasWeb3 = true;
            return
        } catch (error) {
            console.error(error)
        }
    
	}else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider)
        let accounts = await web3.eth.getAccounts()
        defaultAccount = accounts[0]
        
		anyUpdate();
        
		return
    }   
    setTimeout(checkForBinanceChain, 3000)
}

async function checkForBinanceChain() {
    try {
        await window.BinanceChain.enable()
        console.log(typeof(window.BinanceChain))
        if (window.BinanceChain) {
            console.log('BinanceChain')
            await BinanceChain.enable()
            window.web3 = new Web3(window.BinanceChain)
            let accounts = await web3.eth.getAccounts()
            defaultAccount = accounts[0]
            
			anyUpdate()
            
			return
        }
    } catch (e) {}
} 


function anyUpdate() {
	loadContract();
	loadAccount();	
	setTimeout(anyUpdate, 100000)	
}


async function loadContract()
{
	
	contract = new web3.eth.Contract(contractABI, contractAddress);
	console.log('Contract Loaded: ' + contract);
     
	usdt = new web3.eth.Contract(usdtABI, usdtAddress);
	console.log('USDT Loaded: ' + usdt);
		
	usdc = new web3.eth.Contract(usdcABI, usdcAddress);
	console.log('USDC Loaded: ' + usdc);
	
	busd = new web3.eth.Contract(busdABI, busdAddress);
	console.log('BUSD Loaded: ' + busd);
	
	$('#cboWithdrawToken').find('option').remove().end()
	$('#cboWithdrawToken').append($('<option>', {
		value: '',
		text: '-- Select Payout Source --'
	}));
		
	// BNB Balance of a contract	
	await web3.eth.getBalance(contractAddress).then(function(result){ 
		let balance = web3.utils.fromWei(result, 'ether');
		bnb_balance = balance;
		console.log('Contract BNB Balance: ' + parseFloat(balance).toFixed(4));	
		$('#contract-balance-bnb').html( parseFloat(balance).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") );
	
		$('#cboWithdrawToken').append($('<option>', {
			value: '4',
			text: 'Withdraw from BNB Contract Balance ('+ parseFloat(balance).toFixed(4).toLocaleString("en-US") +')'
		}));
	
	
	});
	
	await usdt.methods.balanceOf(contractAddress).call().then(function(result){ 
        usdt_balance = web3.utils.fromWei(result, 'ether'); 
		$('#contract-balance-usdt').html( parseFloat(usdt_balance).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") );
		
		$('#cboWithdrawToken').append($('<option>', {
			value: '0',
			text: 'Withdraw from USDT Contract Balance ('+ parseFloat(web3.utils.fromWei(result)).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") +')'
		}));
		
    });
		
	await usdc.methods.balanceOf(contractAddress).call().then(function(result){ 
        usdc_balance = web3.utils.fromWei(result, 'ether'); 
		$('#contract-balance-usdc').html( parseFloat(usdc_balance).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") );
		
		$('#cboWithdrawToken').append($('<option>', {
			value: '1',
			text: 'Withdraw from USDC Contract Balance ('+ parseFloat(web3.utils.fromWei(result)).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") +')'
		}));
		
    });
	
	await busd.methods.balanceOf(contractAddress).call().then(function(result){ 
		busd_balance = web3.utils.fromWei(result, 'ether'); 
        $('#contract-balance-busd').html( parseFloat(busd_balance).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") );
		
		$('#cboWithdrawToken').append($('<option>', {
			value: '2',
			text: 'Withdraw from BUSD Contract Balance ('+ parseFloat(web3.utils.fromWei(result)).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") +')'
		}));
		
		
    });
		
	

	let withdrawn;
	await contract.methods.withdrawn().call().then(function(result){ 
		withdrawn = web3.utils.fromWei(result, 'ether');
		console.log('Withdrawn: ' + parseFloat(withdrawn).toFixed(4));	
		$('#withdrawn').html( parseFloat(withdrawn).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") )
	});
	
	let reinvested = 0;
	await contract.methods.reinvested().call().then(function(result){ 
		reinvested = web3.utils.fromWei(result, 'ether');
		console.log('Reinvested: ' + parseFloat(reinvested).toFixed(4));	
		$('#reinvested').html( parseFloat(reinvested).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") )
	});
		
	
	let rewards = 0;
	await contract.methods.rewards().call().then(function(result){ 
		rewards = web3.utils.fromWei(result, 'ether');
		console.log('Rewards: ' + parseFloat(rewards).toFixed(4));	
		$('#rewards').html( parseFloat(rewards).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") )
	});
	
	let invested = 0;
	await contract.methods.invested().call().then(function(result){ 
		invested = web3.utils.fromWei(result, 'ether');
			
		console.log('Contract Deposits: ' + parseFloat(invested).toFixed(4));	
		console.log('Reinvested: ' + parseFloat(reinvested).toFixed(4));
		invested = parseFloat(invested) + parseFloat(reinvested);		
		console.log('Total Invested: ' + parseFloat(invested).toFixed(4));	
		let buffer = (parseFloat(withdrawn) / parseFloat(invested)) * 100;	
		console.log('Buffer: ' + parseFloat(buffer).toFixed(4));	
		
		$('#investments').html( parseFloat(invested).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').toLocaleString("en-US") )
	});
	
	// account allowances
	
	await usdt.methods.allowance(defaultAccount, contractAddress).call().then(function(result){ 
		allowance_usdt = web3.utils.fromWei(result, 'ether');
		console.log('USDT Allowance: '+allowance_usdt);
		//if(allowance <= 0){ $('#btn-approve').show(); }else{ $('#btn-approve').hide(); }
	});		
		
	await usdc.methods.allowance(defaultAccount, contractAddress).call().then(function(result){ 
		allowance_usdc = web3.utils.fromWei(result, 'ether');
		console.log('USDC Allowance: '+allowance_usdc);
		//if(allowance <= 0){ $('#btn-approve').show(); }else{ $('#btn-approve').hide(); }
	});		
	
	await busd.methods.allowance(defaultAccount, contractAddress).call().then(function(result){ 
		allowance_busd = web3.utils.fromWei(result, 'ether');
		console.log('BUSD Allowance: '+allowance_busd);
		//if(allowance <= 0){ $('#btn-approve').show(); }else{ $('#btn-approve').hide(); }
	});		
	
	// Total Wallets in Contract
	let wallets = 0;
	await contract.methods.nextMemberNo().call().then(function(result){ 
		wallets = result;
		console.log('Total Wallets: ' + parseFloat(wallets));	
		$('#activewallets').html( parseFloat(wallets).toLocaleString("en-US")  + ' Wallets')
	});
		
	let rates = 0;
	await contract.methods.rates(1).call().then(function(result){ 
		rates = result;
		console.log('BNB Rates: ' + parseFloat(rates));	
		bnbRates = rates;
	});
		
	
	contractIsLoaded = true;
}

	
async function loadAccount()
{
    let addrs = await window.ethereum.enable();
	defaultAccount = web3.utils.toChecksumAddress(addrs[0]);
	console.log('My Account: ' + defaultAccount);
	
	// my BNB Balance
	let balance1 = await web3.eth.getBalance(defaultAccount);
	myBNB = parseFloat(web3.utils.fromWei(balance1, 'ether')).toFixed(4);
	console.log('Balance: ' + myBNB);
	$('#my-balance-bnb').html( parseFloat(myBNB).toFixed(4).toLocaleString("en-US") + ' BNB');
	
	$('#cboTokenBalances').find('option').remove().end()
	$('#cboTokenBalances').append($('<option>', {
		value: '',
		text: '-- 选择代币 --'
	}));
	
	$('#cboTokenBalances').append($('<option>', {
		value: 4,
		text: 'BNB ('+ parseFloat(myBNB).toFixed(4).toLocaleString("en-US") +')'
	}));
	
	await usdt.methods.balanceOf(defaultAccount).call().then(function(result){ 
        tokenBalance = parseFloat(web3.utils.fromWei(result)).toFixed(2);
        myUSDT = tokenBalance;
		
		$('#my-balance-usdt').html( tokenBalance.toLocaleString("en-US") + ' USDT');
		console.log('USDT Balance: '+ myUSDT);
	    
		$('#cboTokenBalances').append($('<option>', {
			value: 0,
			text: 'USDT ('+ tokenBalance.toLocaleString("en-US") + ')'
		}));
	
    });
	
    
	await usdc.methods.balanceOf(defaultAccount).call().then(function(result){ 
        tokenBalance = parseFloat(web3.utils.fromWei(result)).toFixed(2);
        myUSDC = tokenBalance;
		
		$('#my-balance-usdc').html( tokenBalance.toLocaleString("en-US") + ' USDC');
		console.log('USDC Balance: '+ myUSDC);	  

		$('#cboTokenBalances').append($('<option>', {
			value: 1,
			text: 'USDC ('+ tokenBalance.toLocaleString("en-US") + ')'
		}));	
    });
	
	
	await busd.methods.balanceOf(defaultAccount).call().then(function(result){ 
        tokenBalance = parseFloat(web3.utils.fromWei(result)).toFixed(2);
        myBUSD = tokenBalance;
		
		$('#my-balanc-busd').html( tokenBalance.toLocaleString("en-US") + ' BUSD');
		console.log('BUSD Balance: '+ myBUSD);	      

		$('#cboTokenBalances').append($('<option>', {
			value: 2,
			text: 'BUSD ('+ tokenBalance.toLocaleString("en-US") +')'
		}));
		
    });
		
	
	await contract.methods.userInfo(defaultAccount).call().then(function(result){ 
		
		dividends = parseFloat(web3.utils.fromWei(result[0])).toFixed(4);
		console.log('Available Dividends:' + dividends);
		$('#my-dividends').html(dividends.toLocaleString("en-US"));
		$('#my-dividends2').html(dividends.toLocaleString("en-US"));
		
		numDeposits = result[1];
		structure = result[2];
    	if(numDeposits > 0){
			$('#my-referral').html(appPath + 'index.php?ref='+defaultAccount);	
		}else{
			$('#my-referral').html('(请先投资再获取分享链接)');			
		}	
		
    }); 
	
	$("#deposits-body").html('');
	
	if(numDeposits > 0){
		for (let i = 0; i < numDeposits; i++) {
				
			await contract.methods.memberDeposit(defaultAccount,i).call().then(function(result){				
				$("#deposits-body").append('<tr><th align="center" scope="row">'+ 
					(i+1) +'.</th><td align="center">'+ 
					timeDisplay(result[0] * 1000)+'</td><td align="center">'+
					parseFloat(web3.utils.fromWei(result[1])).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+' BNB</td><td align="center">'+
					result[2]+'</td><td align="center">'+
					result[3]+'%</td></tr>	');
			});	
		
		}
	}
	
	var addresses = [];
	let downlines = 0;
	let ctr = 1;
	$("#downlines-body").html('');
	for (let i = 0; i < structure.length; i++) {
		downlines = structure[i];
		for(let j = 0; j < downlines; j++){			
			await contract.methods.memberDownline(defaultAccount,i+1, j).call().then(function(result){				
				//$("#1stlevel-downlines").append('<li><h6><a href="https://bscscan.com/address/'+ result +'" target ="blank">'+ result +'</h6></a></li>');
				addresses[ctr-1] = result;
				$("#downlines-body").append('<tr><th align="center" scope="row">'+ctr+'.</th><td align="center"><a href="https://bscscan.com/address/'+ result +'" target ="blank">'+result+'</a></td><td align="center">'+(i+1)+'</td><td align="right" id="j'+ctr+'">&nbsp;</td></tr>');
				ctr++;
			});	
		}
	}
       
	for(let i = 0; i < addresses.length; i++){
		await totalDeposit(i+1, addresses[i]);
	}		
    /* 	
	$("#1stlevel-downlines").html('');
	for (let i = 0; i < numDownlines1; i++) {		
		await contract.methods.memberDownline(defaultAccount,i).call().then(function(result){				
			$("#1stlevel-downlines").append('<li><h6><a href="https://bscscan.com/address/'+ result +'" target ="blank">'+ result +'</h6></a></li>');
    	});	
	}
	*/
   
    await contract.methods.players(defaultAccount).call().then(function(result) {         
		
		if(result[0] != '0x0000000000000000000000000000000000000000')
		{
		    spAccount = result[0];
	       
		}
		console.log('SpAccount: '+spAccount);
		$('#sp-wallet').val(spAccount); 
		 
		myDeposits = parseFloat(web3.utils.fromWei(result[3])).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
		$('#my-deposits').html(myDeposits.toLocaleString("en-US") + ' BNB');
        		
		myWithdrawn = parseFloat(web3.utils.fromWei(result[4])).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
		$('#my-payouts').html(myWithdrawn.toLocaleString("en-US")  + ' BNB');
		
		myReinvests = parseFloat(web3.utils.fromWei(result[5])).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
		$('#my-reinvestments').html(myReinvests.toLocaleString("en-US")  + ' BNB');
		
		myRewards = parseFloat(web3.utils.fromWei(result[6])).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
		$('#my-rewards').html(myRewards.toLocaleString("en-US")  + ' BNB');
		
		lastPayout = result[7];
		//lastDeposit = result[9];
				
    });	
		
	prevAccount = defaultAccount;
	
	
    var acct = defaultAccount.toString(); 
    //$("#connect2").html(acct);
    //$("#my-wallet1").html(acct);
    
    var connectedAddr = acct[0] + 
                                acct[1] + 
                                acct[2] + 
                                acct[3] + 
                                acct[4] +
								acct[5] +
								acct[6] +
								acct[7] +
								acct[8] +
								acct[9] +
								acct[10] +
								acct[11] +								
                                acct[12] + '...' +
                                acct[acct.length-12] + 
                                acct[acct.length-11] + 
                                acct[acct.length-10] + 
                                acct[acct.length-9] + 
                                acct[acct.length-8] + 
                                acct[acct.length-7] + 
                                acct[acct.length-6] + 
                                acct[acct.length-5] +
								acct[acct.length-4] + 
                                acct[acct.length-3] + 
                                acct[acct.length-2] + 
                                acct[acct.length-1];
    
    //$("#buttonConnect").html(connectedAddr);
    $('#my-wallet').val(connectedAddr);
	//$('#connect3').html(connectedAddr);
	
    
}

async function totalDeposit(ctr, address) {
	
	await contract.methods.players(address).call().then(function(result) {         
	var deposits = parseFloat(web3.utils.fromWei(result[3])).toFixed(4).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
		//return(deposits.toLocaleString("en-US") + ' BNB');
		$('#j'+ctr).html(deposits.toLocaleString("en-US") + ' BNB');
	});	
}
	
async function approve1()
{
	if(!web3 || defaultAccount == ''){
		return false;
	}		
	try{
		const sender = await usdt.methods.approve(contractAddress,web3.utils.toWei("1000000000", "ether")).send({from: defaultAccount})
				.then(function(result){ 
					$('#display-approve').hide();						
				 }).catch(err => function(){
					console.log(err);
		});
	}catch(err){
		console.log(err);
	}
}
	

async function approve2()
{
	if(!web3 || defaultAccount == ''){
		return false;
	}		
	try{
		const sender = await usdc.methods.approve(contractAddress,web3.utils.toWei("1000000000", "ether")).send({from: defaultAccount})
				.then(function(result){ 
					$('#display-approve').hide();						
				 }).catch(err => function(){
					console.log(err);
		});
	}catch(err){
		console.log(err);
	}
}

async function approve3()
{
	if(!web3 || defaultAccount == ''){
		return false;
	}		
	try{
		const sender = await busd.methods.approve(contractAddress,web3.utils.toWei("1000000000", "ether")).send({from: defaultAccount})
				.then(function(result){ 
					$('#display-approve').hide();						
				 }).catch(err => function(){
					console.log(err);
		});
	}catch(err){
		console.log(err);
	}
}





async function investBNB(tokenType, planType, amt)
{
	if(!web3 || defaultAccount == '' || spAccount == ''){
		return false;
	}
	

	try{
		
		const sender = await contract.methods.Deposit(spAccount, planType).send({from: defaultAccount, value: web3.utils.toWei(amt, "ether")})
				.on('transactionHash', function(hash){
					console.log('Invest succeeded! TX Hash: '+hash);					
					loadContract();
					loadAccount();	
						
				}).catch(err => function(){
					console.log(err);	
				});
			
	}catch(err){
		console.log(err);
	}				
}

async function investTether(tokenType, planType, amt)
{
	if(!web3 || defaultAccount == '' || spAccount == ''){
		return false;
	}
	
	try{
		const sender = await contract.methods.TetherDeposit(spAccount, web3.utils.toWei(amt, "ether"), tokenType, planType).send({from: defaultAccount})
				.on('transactionHash', function(hash){
					console.log('Invest succeeded! TX Hash: '+hash);					
					loadContract();
					loadAccount();	
						
				}).catch(err => function(){
					console.log(err);	
				});
	}catch(err){
		console.log(err);
	}				
}



async function collectDividends(ttype, plan)
{
	console.log('Ttype: '+ttype+', Plan: '+plan);
	if(!web3 || defaultAccount == ''){
		return false;
	}
	
	try{
		const sender = await contract.methods.Payout(ttype, plan,'').send({from: defaultAccount})
				.then(function(result){
					$('#withdrawModal').modal('hide');
					loadContract();
					loadAccount();	
				 }).catch(err => function(){
					console.log(err);
		});
	}catch(err){
		console.log(err);
	}
				
}

function timeDisplay(createdAt) {
    var date = new Date(createdAt);
  	date = convertTZ(date, "Asia/Taipei")
   	//console.log(date);
   	var mm = date.getMonth() + 1; // getMonth() is zero-based
    var dd = date.getDate();
    var dateFormat = [date.getFullYear(), (mm>9 ? '' : '0') + mm, (dd>9 ? '' : '0') + dd ].join('-');
    var timeFormat = formatAMPM(date);         
  	return [dateFormat, timeFormat].join(' ');
}

 function convertTZ(date, tzString) {
        return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));   
    }
    
    function formatAMPM(date) {
      var hours = date.getHours();
      var minutes = date.getMinutes();
      var ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12;
      hours = hours ? hours : 12; // the hour '0' should be '12'
      minutes = minutes < 10 ? '0'+minutes : minutes;
      var strTime = hours + ':' + minutes + ' ' + ampm;
      return strTime;
    }
	

