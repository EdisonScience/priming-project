var imgActual = 0;
let img = document.images['divImg'];
function cambiarImg() {
 	if (img == null) return;
 	img.src = listaImg[imgActual];
 	imgActual++;
 	if (imgActual == listaImg.length)
 		imgActual = 0;
 };
setInterval(cambiarImg, 1335);
 /*setTimeout(() => {
 	setInterval(cambiarImg, 100);
 }, 2000);*/
 let imgAppear = () => {
 	img.classList.remove('form')
 };
 setTimeout(imgAppear, 2000);
 let imgDisappear = () => {
 	img.classList.add('form')
 };
 setTimeout(imgDisappear, 4000);
 ///////////////////////////////////////
 const form = document.getElementById('form');
 let formAppear = () => {
 	//if (form.style.display =='none'
 	/*inputs.style.display =='none')
				{/*inputs.style.display ='block',
			//	form.style.display='block';};*/
 	form.classList.remove('form')
 		//inputs.classList.remove("form");
 };
 var count = 11;
 setTimeout(formAppear, 5000);
 /*window.onload=*/
 setTimeout(() => {
 	setInterval(timer, 1000);
 }, 5000);
 //let counter=setInterval(timer, 1000);
 function timer() {
 	count = count - 1;
 	if (count <= 0) { //clearInterval(counter);
 		return;
 	};
 	document.getElementById("timer").innerHTML = count;
 };

 // este sería el div-><img name="anim">
 /*************************************************/
/* window.onload = function() {
 	var image = document.getElementById("divImg");
 	var img_array = ["https://th.bing.com/th/id/OIP.DyQckYXfzF3YMs17keGa7QHaE8?w=261&h=180&c=7&o=5&pid=1.7",
 	 "https://th.bing.com/th/id/OIP.R6b3iit9E09nXlYjd1QivwHaFj?w=232&h=180&c=7&o=5&pid=1.7"];
 	var index = 0;
 	var interval = 2750;

 	function slide() {
 		image.src = img_array[index++ % img_array.length];
 	}
 	setInterval(slide, interval);
 	setTimeout(function() {
 		slide();
 		setTimeout(arguments.callee, interval)
 	}, interval);
 	setTimeout(function() {
 		slide();
 	}, 2000);
 };
 ////
 let img=document.images['divImg'];
 let imgAppear = () => {
 	document.images['divImg'].classList.remove('form')
 };
 setTimeout(imgAppear, 2000);
 let imgDisappear = () => {
 	img.classList.add('form')
 };
 setTimeout(imgDisappear, 4000);*/

 /*</script>
 </head>
 <body>
 <img id="aaa" src="https://th.bing.com/th/id/OIP.dNVZPGNeal_Qavt-bYbsfgHaEb?w=278&h=180&c=7&o=5&pid=1.7"
  width="400" height="400" name="image" />
 </body>*/
