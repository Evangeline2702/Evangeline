<style type="text/css">
	.bg{
		background: url('../../../img/bg-30.jpg');
		background-size: cover;
		height: 700px; 
		width: 1365px; 
	    position: relative;  
	    background-repeat: no-repeat;
	  	background-position: center center; 
	}


	.bg-bayar{
		background: url('../../../img/bg-15.jpg');
		background-size: cover;
		height: 663px; 
		width: 1365px; 
	    position: relative;  
	    background-repeat: no-repeat;
	  	background-position: center center; 
	}

	.bg2{
		background: url(../img/bg-02.jpg); 
		background-size: cover;
		height: 663px; 
		width: 1365px; 
	    position: relative;  
	    background-repeat: no-repeat;
	  	background-position: center center; 
	  }

	.bg3{
			background: url(../img/bg-03.jpg); 
			background-size: cover;
			height: 663px; 
			width: 1365px; 
		    position: relative;  
		    background-repeat: no-repeat;
		  	background-position: center center; 
		  }

	.bg4{
			background: url(../img/bg-04.jpg); 
			background-size: cover;
			height: 663px; 
			width: 1365px; 
		    position: relative;  
		    background-repeat: no-repeat;
		  	background-position: center center; 
		  }

	.bg5{
			background: url(../img/bg-09.jpg); 
			background-size: cover;
			height: 663px; 
			width: 1365px; 
		    position: relative;  
		    background-repeat: no-repeat;
		  	background-position: center center; 
		  }



	.bg_g{
		background: rgb(121,9,120);
		background: linear-gradient(90deg, rgba(121,9,120,0.7) 38%, rgba(104,230,255,0.7) 100%);
		opacity: 0.250;
		height: 663px; 
		width: 1365px; 
	    position: absolute;  
	    background-repeat: no-repeat;
	  	background-position: center center; 
	}

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
	  -webkit-appearance: none;
	  margin: 0;
	}


	.c_btn-outline-secondary {
		  color: #6c757d;
		  border-color: #6c757d;
	}
	.c_btn-outline-secondary:hover {
		  color: black;
		  background-color: #fff;
		  border-color: #6c757d;
	}



	.cus_card_login{
		position: absolute;
		  left: 50%;
		  top: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  display: flex;
		  flex-direction: column;
		  width: 380px;
		  word-wrap: break-word;
		  background-color: rgba(255, 255, 255, 0.3);
			backdrop-filter: blur(10px);

		  opacity: 0.80;
		  background-clip: border-box;
		  bottom: -8% !important;
		  border: 1px solid rgba(0, 0, 0, 0.125);
		  border-radius: 0.75rem;
		  box-shadow: 5px 5px 8px;
	}

	.cus_card_table{

		position: absolute;
		  left: 50%;
		  top: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  display: flex;
		  flex-direction: column;
		  width: 1200px;
		  word-wrap: break-word;
		  background-color: rgba(255, 255, 255, 0.1);
			/*background: linear-gradient(90deg, rgba(104,230,255,0.2) 38%, rgba(121,9,120,0.2) 100%);*/

		  /*backdrop-filter: blur(5px);*/
		  background-clip: border-box;
		  bottom: -25% !important;
		  border: 1px solid rgba(0, 0, 0, 0.125);
		  border-radius: 0.75rem;
		  letter-spacing:2px;
	}


												/*BUTTON*/
	.cus_btn{
		text-decoration: none;
		text-transform: uppercase;
		letter-spacing: 2px;
		color:#fff;
		outline: 2px solid #fff;
		padding: 12px 100px;
		position: relative;
		overflow: hidden;
		transition: color 1s;
	}

	.cus_btn3{
		text-decoration: none;
		text-transform: uppercase;
		letter-spacing: 2px;
		color:#fff;
		outline: 2px solid #fff;
		padding: 12px 12px;
		position: relative;
		overflow: hidden;
		}

	.cus_btn2{
		text-decoration: none;
		text-transform: uppercase;
		letter-spacing: 2px;
		color:#fff;
		outline: 2px solid black;
		padding: 12px 100px;
		position: relative;
		overflow: hidden;
		transition: color 1s;
	}

	
.cus_btn-outline-secondary {
  color: white;
  border-color: white;
  transition: 0.5s;
}
.cus_btn-outline-secondary:hover {
  color: black;
  background-color: #fff;
  border-color: black;
}

.cus_btn-outline-secondary::before{
		content:'';
		position: absolute;
		top: 0;
		left: -50px;
		width: 0;
		height: 100%;
		background-color: #fff;
		transform: skewX(35deg);
		z-index: -1;
		transition: width 1s;
	}
	
	.cus_btn-outline-secondary:hover::before{
		width: 11%;
	}	

/*aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa*/
	.cus_btn-bayar {
  text-decoration: none;
		text-transform: lowercase;
		letter-spacing: 2px;
		top: 3px;
		color:#000;
		outline: 2px solid #000;
		padding: 5px 20px;
		position: relative;
		overflow: hidden;
		transition: color  1s, background-color 1s;
  background-color: white;

}
.cus_btn-bayar:hover {
  color: white;
  background-color: transparent;
  border-color: white;
}

.cus_btn-cek {
  text-decoration: none;
		text-transform: lowercase;
		letter-spacing: 2px;
		top: 3px;
		color:#fff;
		outline: 2px solid #fff;
		padding: 15px 70px;
		position: relative;
		overflow: hidden;
		transition: color 1s, outline 1s;
}
.cus_btn-cek:hover {
  color: black;
  background-color: transparent;
  outline: 2px solid #000;
}


.cus_btn-lunas {
  text-decoration: none;
  color: white;
  background-color: black;
  border-color: black;
		text-transform: lowercase;
		letter-spacing: 2px;
		top: 3px;	
		outline: 2px solid #000;
		padding: 5px 20px;
		position: relative;
		overflow: hidden;
		transition: color  1s,background-color 1s;
}
.cus_btn-lunas:hover {
  color: black;
  background-color: white;
  border-color: white;
}



.cus_btn-bayar::before{
		content:'';
		color: black;
		position: absolute;
		top: 0;
		left: 0px;
		width: 0;
		height: 100%;
		background-color: #000;
		transform: skewX(0deg);
		z-index: -1;
		transition: width 0.5s;
	}
	
	.cus_btn-bayar:hover::before{
		width: 100%;
	}	


.tr_cus{
border-left: 0.2px solid white;
  border-right: 0.2px solid white;
}


	.cus_btn{
		text-decoration: none;
		text-transform: uppercase;
		letter-spacing: 2px;
		color:#fff;
		outline: 2px solid #fff;
		padding: 12px 100px;
		position: relative;
		overflow: hidden;
		transition: color 1s;
	}
.cus_btn:hover{
		color: #833ab4;
	}

	.cus_btn::before{
		content:'';
		position: absolute;
		top: 0;
		left: -50px;
		width: 0;
		height: 100%;
		background-color: #fff;
		transform: skewX(35deg);
		z-index: -1;
		transition: width 1s;
	}
	
	.cus_btn:hover::before{
		width: 150%;
	}	

/*aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa*/


	.cus_nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: black;
  text-decoration: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .cus_nav-link {
    transition: none;
  }
}
.cus_nav-link:hover, .cus_nav-link:focus {
  color: #fff;
}
.cus_nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}



	.cus_nav-link-login {
  display: block;
  padding: 0px;
  color: white;
  text-decoration: none;
  transition: color 1s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .cus_nav-link-login {
    transition: none;
  }
}
.cus_nav-link-login:hover, .cus_nav-link-login:focus {
  color: darkblue;
}






.cus_nav-link-logout {
  display: block;
  padding: 0px;
  color: black;
  text-decoration: none;
  transition: color 1s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .cus_nav-link-logout {
    transition: none;
  }
}
.cus_nav-link-logout:hover, .cus_nav-link-logout:focus {
  color: white;
}



	.cus_btn:hover{
		color: #833ab4;
	}

	.cus_btn::before{
		content:'';
		position: absolute;
		top: 0;
		left: -50px;
		width: 0;
		height: 100%;
		background-color: #fff;
		transform: skewX(35deg);
		z-index: -1;
		transition: width 1s;
	}
	
	.cus_btn:hover::before{
		width: 150%;
	}	

	.astext {
	    background:none;
	    border:none;
	    margin:0;
	    padding:0;
	    cursor: pointer;
	}

	.cus_btn_light{
		text-decoration: none;
		text-transform: uppercase;
		letter-spacing: 2px;
		position: relative;
		overflow: hidden;
		transition: color 1s;

		border: 2px solid rgba(255,255,255,1);
		padding: 12px 14px;
		background: transparent;
		border-radius: 5px;
	}


 	

/**/
														/*END BUTTON*/

	.inputBox{
		position: relative;
		width: 258px;
	}

	.inputBox input{
		width: 100%;
		padding: 10px;
		border: 2px solid rgba(255,255,255,1);
		background: transparent;
		border-radius: 5px;
		outline: none;
		color: #fff;
		font-size: 1em;
		transition: 0.5s;
	}
	
	.inputBox span{
		position: absolute;
		left: 0;
		padding: 10px;
		pointer-events: none;
		font-size: 1em;
		color: rgba(255,255,255,0.25); 
		text-transform: uppercase;
		transition: 0.5s;
	}

	.inputBox input:valid ~ span, 
	.inputBox input:focus ~ span{
		color: black;
		transform: translateX(18px) translateY(-7px);
		font-size: 0.65em;
		padding: 0 10px;
		background: white;
		border-left: 1px solid #white;
		border-right: 1px solid #white;
		letter-spacing: 0.2em;
	}
	.inputBox input:valid ~ span, 
	.inputBox input:focus ~ span{
		border: 1px solid white;
	}



	.black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: absolute;
  top: 25%;
  left: 25%;
  width: 50%;
  height: 50%;
  padding: 16px;
  border: 16px solid orange;
  background-color: white;
  z-index: 1002;
  overflow: auto;
}



.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(-100%);
}


body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: #f2eee3;
  font-size: 70%;
  line-height: 1.4;
  font-family: "Inter", sans-serif;
  color: #6b7280;
  font-weight: 400;
}
@media only screen and (min-width: 600px) {
  body {
    justify-content: center;
    align-items: center;
    display: flex;
    height: 100vh;
    font-size: 100%;
  }
}

.button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background: #16a34a;
  border-radius: 0.25em;
  color: white;
  cursor: pointer;
  display: inline-block;
  font-weight: 500;
  height: 3em;
  line-height: 3em;
  padding: 0 1em;
}
.button:hover {
  background-color: #17ac4e;
}

.details-modal {
  background: #ffffff;
  border-radius: 0.5em;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  left: 50%;
  max-width: 90%;
  pointer-events: none;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 30em;
  text-align: left;
  max-height: 90vh;
  display: flex;
  flex-direction: column;
}
.details-modal .details-modal-close {
  align-items: center;
  color: #111827;
  display: flex;
  height: 4.5em;
  justify-content: center;
  pointer-events: none;
  position: absolute;
  right: 0;
  top: 0;
  width: 4.5em;
}
.details-modal .details-modal-close svg {
  display: block;
}
.details-modal .details-modal-title {
  color: #111827;
  padding: 1.5em 2em;
  pointer-events: all;
  position: relative;
  width: calc(100% - 4.5em);
}
.details-modal .details-modal-title h1 {
  font-size: 1.25rem;
  font-weight: 600;
  line-height: normal;
}
.details-modal .details-modal-content {
  border-top: 1px solid #e0e0e0;
  padding: 2em;
  pointer-events: all;
  overflow: auto;
}

.details-modal-overlay {
  transition: opacity 0.2s ease-out;
  pointer-events: none;
  background: rgba(15, 23, 42, 0.8);
  position: fixed;
  opacity: 0;
  bottom: 0;
  right: 0;
  left: 0;
  top: 0;
}
details[open] .details-modal-overlay {
  pointer-events: all;
  opacity: 0.5;
}

details summary {
  list-style: none;
}
details summary:focus {
  outline: none;
}
details summary::-webkit-details-marker {
  display: none;
}

code {
  font-family: Monaco, monospace;
  line-height: 100%;
  background-color: #2d2d2c;
  padding: 0.1em 0.4em;
  letter-spacing: -0.05em;
  word-break: normal;
  border-radius: 7px;
  color: white;
  font-weight: normal;
  font-size: 1.75rem;
  position: relative;
  top: -2px;
}

.container {
  text-align: center;
  max-width: 40em;
  padding: 2em;
}
.container > h1 {
  font-weight: 700;
  font-size: 2rem;
  line-height: normal;
  color: #111827;
}
.container > p {
  margin-top: 2em;
  margin-bottom: 2em;
}
.container sup {
  font-size: 1rem;
  margin-left: 0.25em;
  opacity: 0.5;
  position: relative;
}



	/*.bg_grad {
		width: 100%;
		height: 768px;
		background: rgb(121,9,120);
		background: linear-gradient(90deg, rgba(121,9,120,0.7) 35%, rgba(0,156,187,0.7) 100%);
		opacity: 0.6100000143051147;
		position: relative;
		top: 0px;
		left: 0px;
		overflow: hidden;
	}*/
</style>