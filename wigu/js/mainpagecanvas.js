$("#signup-mainpage").hover(function(){
	$("#signup-mainpage").css("background", "url(css/images/button_signup_in.png) no-repeat")
}, function(){
	$("#signup-mainpage").css("background", "url(css/images/button_signup.png) no-repeat")
});

$("#submit-mainpage").hover(function(){
	$("#submit-mainpage").css("background", "url(css/images/button_submit_in.png) no-repeat")
}, function(){
	$("#submit-mainpage").css("background", "url(css/images/button_submit.png) no-repeat")
});

/* ================
Dogs and Characters
=================*/
// create an array of assets to load

var assetsToLoader = ["data/dogs.json", "data/dogsSpineData.json"];

// create a new loader
loader = new PIXI.AssetLoader(assetsToLoader);

// use callback
loader.onComplete = onAssetsLoaded

//begin load
loader.load();


// create an new instance of a pixi stage
var stage = new PIXI.Stage(0xFFFFFF, true);
var canvasWidth = 1150;
var canvasHeight = 150;
// create a renderer instance
var renderer = new PIXI.autoDetectRenderer(canvasWidth,canvasHeight, null, true, true);

// set the canvas width and height to fill the screen
renderer.view.style.display = "block";

// add render view to DOM
document.getElementById("bottomcanvas").appendChild(renderer.view);

var postition = 0;
var spineBoy;

function onAssetsLoaded()
{
	// create a spine boy
	spineBoy = new PIXI.Spine("data/dogsSpineData.json");


	// set current skin
	spineBoy.skeleton.setSkinByName('LargeAiredaleTerrier');
	
	spineBoy.skeleton.setSlotsToSetupPose();
	
	// set the position
	spineBoy.position.x =100;
	spineBoy.position.y = 150;

	spineBoy.scale.x = spineBoy.scale.y = 0.4;

	// play animation
	spineBoy.state.setAnimationByName("idle_a", true); 


/* 		var animationTime = 500000;

	
	function render (delta) {
	   var timeScale=animationTime*delta;
	   spineBoy.state.apply(this.skeleton, timeScale, true);
	   spineBoy.updateTransform();
	   renderSkeleton(spineBoy);
	}  */
	

	stage.addChild(spineBoy);
	requestAnimFrame(animate);
	
}


function animate() {
	
	/* spineBoy.position.x +=1; */




	requestAnimFrame( animate );
	renderer.render(stage);
	

}




