<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EtteStore</title>

  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/ti-icons/css/themify-icons.css') }} ">
  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/css/vendor.bundle.base.css') }}">

  <link rel="stylesheet" href="{{ asset('dashStyle/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('js/select.dataTables.min.css') }}">

  <!--mon lien Popup-->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->


  <link rel="stylesheet" href="{{ asset('dashStyle/css/vertical-layout-light/style.css') }}">

  <link rel="shortcut icon" href="images/favicon.png" />

  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />

  @yield('styles')
  
  <style>
   .imageModif {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  border-style: solid;
  border-color: #FFFFFF;
  box-shadow: 0 0 8px 3px #B8B8B8;
  position: relative;
  margin-left: 30%;
}

.imageModif img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
}

.imageModif i {
  position: absolute;
  top: 20px;
  right: -7px;
  /* border: 1px solid; */
  border-radius: 50%;
  /* padding: 11px; */
  height: 30px;
  width: 30px;
  display: flex !important;
  align-items: center;
  justify-content: center;
  background-color: white;
  color: cornflowerblue;
  box-shadow: 0 0 8px 3px #B8B8B8;
}



.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  margin-top: 6% ;
  margin-left: 15% ;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}



#custom-button {
  padding: 4px;
  color: white;
  background-color: #009578;
  border: 0px solid #000;
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 0 0 4px 2px #B8B8B8;
  margin: auto;
}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  margin-left: 9px;
  font-family: sans-serif;
  color: #aaa;
}





#custom-button2 {
  padding: 4px;
  color: white;
  background-color: #009578;
  border: 0px solid #000;
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 0 0 4px 2px #B8B8B8;
  margin: auto;
}

#custom-button2:hover {
  background-color: #00b28f;
}

#custom-text2 {
  margin-left: 9px;
  font-family: sans-serif;
  color: #aaa;
}


#custom-button3 {
  padding: 4px;
  color: white;
  background-color: #009578;
  border: 0px solid #000;
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 0 0 4px 2px #B8B8B8;
  margin: auto;
}

#custom-button3:hover {
  background-color: #00b28f;
}

#custom-text3 {
  margin-left: 9px;
  font-family: sans-serif;
  color: #aaa;
}





/*boutton de type file sur les commentaire */
.js .input-file-container {
	position: relative;
	width: 150px;
}

.js .input-file-trigger {
	display: block;
	padding: 10px 20px;
	background: #39D2B4;
	color: #fff;
	font-size: 1em;
	transition: all .4s;
	cursor: pointer;
}

.js .input-file {
	position: absolute;
	top: 0;
	left: 0;
	width: 225px;
	padding: 14px 0;
	opacity: 0;
	cursor: pointer;
}

/* quelques styles d'interactions */
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
	background: #34495E;
	color: #39D2B4;
}

/* styles du retour visuel */
.file-return {
	margin: 0;
}

.file-return:not(:empty) {
	margin: 1em 0;
}

.js .file-return {
	font-style: italic;
	font-size: .9em;
	font-weight: bold;
}

/* on complète l'information d'un contenu textuel uniquement lorsque le paragraphe n'est pas vide */
.js .file-return:not(:empty):before {
	content: "Selected file: ";
	font-style: normal;
	font-weight: normal;
}







.buttonContainer{
    top: 25%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
  }
  
  
  .upload-box{
    font-size: 16px;
    background: white;
    border-radius: 50px;
    box-shadow: 5px 5px 10px black;
    width: 250pc;
    outline: none;
  }
  
  ::-webkit-file-upload-button{
    color:white;
    background: #206a5d;
    padding: 15px;
    border: none;
    border-radius: 50px;
    box-shadow: 1px 0 1px #6b4559;
    outline: none;
  }
  
  ::-webkit-file-upload-button:hover{
    background: #438a5e;
  }


</style>
</head>
<body>

    @include('dash/partials/navbar')

    @yield('content')

    @include('dash/partials/footer')




     <!-- plugins:js -->
  <script src="{{ asset('dashStyle/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('dashStyle/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('dashStyle/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('dashStyle/vendors/progressbar.js/progressbar.min.js') }}"></script>

<!--mon lien Popup-->
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('dashStyle/js/off-canvas.js') }}"></script>
  <script src="{{ asset('dashStyle/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('dashStyle/js/template.js') }}"></script>
  <script src="{{ asset('dashStyle/js/settings.js') }}"></script>
  <script src="{{ asset('dashStyle/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('dashStyle/js/dashboard.js') }}"></script>
  <script src="{{ asset('dashStyle/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->

  <script>
    const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});






//2
const realFileBtn2 = document.getElementById("real-file2");
const customBtn2 = document.getElementById("custom-button2");
const customTxt2 = document.getElementById("custom-text2");

customBtn.addEventListener("click", function() {
  realFileBtn2.click();
});

realFileBtn2.addEventListener("change", function() {
  if (realFileBtn2.value) {
    customTxt2.innerHTML = realFileBtn2.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt2.innerHTML = "No file chosen, yet.";
  }
});

//3

const realFileBtn3 = document.getElementById("real-file3");
const customBtn3 = document.getElementById("custom-button3");
const customTxt3 = document.getElementById("custom-text3");

customBtn.addEventListener("click", function() {
  realFileBtn3.click();
});

realFileBtn3.addEventListener("change", function() {
  if (realFileBtn3.value) {
    customTxt3.innerHTML = realFileBtn3.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt3.innerHTML = "No file chosen, yet.";
  }
});




//boutton de type file sur les commentaire 
//document.querySelector("html").classList.add('js');

// initialisation des variables
//var fileInput = document.querySelector( ".input-file" ),
//	button = document.querySelector( ".input-file-trigger" ),
//	the_return = document.querySelector(".file-return");

// action lorsque la "barre d'espace" ou "Entrée" est pressée
//button.addEventListener( "keydown", function( event ) {
//	if ( event.keyCode == 13 || event.keyCode == 32 ) {
//		fileInput.focus();
//	}
//});

// action lorsque le label est cliqué
//button.addEventListener( "click", function( event ) {
//	fileInput.focus();
//	return false;
//});

// affiche un retour visuel dès que input:file change
//fileInput.addEventListener( "change", function( event ) {
//	the_return.innerHTML = this.value;
//});



  </script>
  @yield('scrip')
</body>

</html>

