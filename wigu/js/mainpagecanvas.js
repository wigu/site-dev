

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
var spineBoy;

function onAssetsLoaded()
{
	// create a spine boy
	spineBoy = new PIXI.Spine("data/dogsSpineData.json");

	/* spineBoy.skeleton.flipX=true; */

	// set current skin
	spineBoy.skeleton.setSkinByName('LargeAiredaleTerrier');
	
	spineBoy.skeleton.setSlotsToSetupPose();
	
	// set the position
	spineBoy.position.x =700;
	spineBoy.position.y = 150;

	spineBoy.scale.x = spineBoy.scale.y = 0.4;

	// play animation
	spineBoy.state.setAnimationByName("idle_a", true); 

	// create a spine boy
	spineBoy2 = new PIXI.Spine("data/dogsSpineData.json");


	// set current skin
	spineBoy2.skeleton.setSkinByName('LargeAkita');
	
	spineBoy2.skeleton.setSlotsToSetupPose();
	
	// set the position
	spineBoy2.position.x =300;
	spineBoy2.position.y = 150;
	
	spineBoy2.scale.x = spineBoy2.scale.y = 0.4;

	// play animation
	spineBoy2.state.setAnimationByName("playing_knot", true); 

/* 		var animationTime = 500000;

	
	function render (delta) {
	   var timeScale=animationTime*delta;
	   spineBoy.state.apply(this.skeleton, timeScale, true);
	   spineBoy.updateTransform();
	   renderSkeleton(spineBoy);
	}  */
	

	stage.addChild(spineBoy);
	stage.addChild(spineBoy2);
	requestAnimFrame(animate);
	
}


function animate() {
	
	/* spineBoy.position.x +=1; */




	requestAnimFrame( animate );
	renderer.render(stage);
	

}



