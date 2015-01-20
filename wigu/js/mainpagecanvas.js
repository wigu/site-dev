

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
document.getElementById("fence").appendChild(renderer.view);

var postition = 0;
var dog;

function onAssetsLoaded()
{
	// create a spine boy
	dog = new PIXI.Spine("data/dogsSpineData.json");

	/* dog.skeleton.flipX=true; */

	// set current skin
	dog.skeleton.setSkinByName('LargeAiredaleTerrier');
	
	dog.skeleton.setSlotsToSetupPose();
	
	// set the position
	dog.position.x =700;
	dog.position.y = 150;

	dog.scale.x = dog.scale.y = 0.4;

	// play animation
	dog.state.setAnimationByName("idle_a", true); 

	// create a spine boy
	dog2 = new PIXI.Spine("data/dogsSpineData.json");


	// set current skin
	dog2.skeleton.setSkinByName('LargeAkita');
	
	dog2.skeleton.setSlotsToSetupPose();
	
	// set the position
	dog2.position.x =300;
	dog2.position.y = 150;
	
	dog2.scale.x = dog2.scale.y = 0.4;

	// play animation
	dog2.state.setAnimationByName("playing_knot", true); 

/* 		var animationTime = 500000;

	
	function render (delta) {
	   var timeScale=animationTime*delta;
	   dog.state.apply(this.skeleton, timeScale, true);
	   dog.updateTransform();
	   renderSkeleton(dog);
	}  */
	

	stage.addChild(dog);
	stage.addChild(dog2);
	requestAnimFrame(animate);
	
}


function animate() {
	
	/* dog.position.x +=1; */




	requestAnimFrame( animate );
	renderer.render(stage);
	

}



