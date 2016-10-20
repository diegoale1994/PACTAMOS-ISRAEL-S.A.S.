(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];

// library properties:
lib.properties = {
	width: 1200,
	height: 664,
	fps: 24,
	color: "#282828",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"images/logopactamos.png", id:"logopactamos"}
	]
};



lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {	//we have found an element in the list		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != cur) { //insert all it's children just before it		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {	//append element and it's parents in the array		
		cur = textInst;		
		while(cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:



(lib.logopactamos = function() {
	this.initialize(img.logopactamos);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1421,1421);


(lib.tb6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("Beneficios", "25px 'Impact'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 195;
	this.text.parent = this;
	this.text.setTransform(0,-15.4);

	this.timeline.addTween(cjs.Tween.get(this.text).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-99.7,-17.4,199.5,34.5);


(lib.tb5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("Administración \nde Nómina", "25px 'Impact'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 195;
	this.text.parent = this;
	this.text.setTransform(0,-30.9);

	this.timeline.addTween(cjs.Tween.get(this.text).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-99.7,-32.9,199.5,87.1);


(lib.tb4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("Suministro y Contratación", "25px 'Impact'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 195;
	this.text.parent = this;
	this.text.setTransform(0,-30.1);

	this.timeline.addTween(cjs.Tween.get(this.text).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-99.7,-32.1,199.5,69.9);


(lib.tb3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("Selección", "25px 'Impact'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 195;
	this.text.parent = this;
	this.text.setTransform(0,-16.2);

	this.timeline.addTween(cjs.Tween.get(this.text).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-99.7,-18.2,199.5,34.5);


(lib.tb2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("¿Cómo lo Hacemos?", "25px 'Impact'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 195;
	this.text.parent = this;
	this.text.setTransform(0,-33);

	this.timeline.addTween(cjs.Tween.get(this.text).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-99.7,-35,199.5,78.4);


(lib.tb1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("¿Qué Hacemos?", "25px 'Impact'", "#020000");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 195;
	this.text.parent = this;
	this.text.setTransform(0,-9.7);

	this.timeline.addTween(cjs.Tween.get(this.text).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-99.7,-11.7,199.5,34.5);


(lib.Símbolo2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("EgWnA7UIgDAAIgDAAIgCAAIgDAAIgCAAIgDAAIgDAAIgCAAIgDAAIgDAAIgCAAIgDAAIgDAAIgBAAIgDAAIgCAAIgDAAIgDAAIgCAAIgDAAIgCAAIgDAAIgDAAIgCAAIgDAAIgDAAIgCAAIgDAAIgCAAIgDAAIgDAAIgCAAIgDAAIgCAAIgDAAIgCAAIgDAAIAAAAIAA/PIAAgmMAAAhWyMAwPA52MguvA8xg");
	this.shape.setTransform(136.8,356);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-17.7,-23.7,309,759.3);


(lib.MUNDOCLARO = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#666666").s().p("AA6B4IgDgEIgagJQgPgFAGAAIABAAIAhANQgKgOgBAAQgCAEgGgBIgPgCIgHgEIgMgJQgUgOgSAAQgTABgaAOQgQAMgPAIQgdAOglgDQAAgJAEgZQABgDgMglQgWhBAVgVQANgMAngKQALgFAPgQQAUgWAGgFQAPgMAJgCQANgBAMgIQAVgMAGgGIAjABIADATQAHAVAQALQAIAEAHABIAMgBIAJhGIAWAlQAKAQAKAVQAKAXAAABIANANIAeAoQARAdgEAsQgEAqgUAfQgWAggcAAQghAAghgtg");
	this.shape.setTransform(294.7,130.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#666666").s().p("AhRCAQgEgHgbhOQgPgsgbgFQg0gCg7gOQArgfApghQAagTAlgBQAdgBADADIAYgUQBFguAwACQALABAlAGQAiAGAeAAQAJAaATAjQAWgDAIgIQAGgHAjgCQgMAZgMAIQgOAJgHALQgLASAAAMQgBAegBAJQgZANgDAHQgFAKgEADIgEACQgRAKgBADQAAABAAAAQAAABAAAAQAAABABAAQAAABABAAQgCAEhZAiQglAOgJAJQgLALgHAlQg6gLgTgeg");
	this.shape_1.setTransform(118.3,16.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#666666").s().p("AD5LCQgMgkANhKQAUhcAJgvQAQhVgHgyIgggSQgOgKgMgWQg0heAUgzQANgaAFgOQAIgYgIgfQgcgCAJAJQADADgbgLQgRgHgUgYQgVgYgYgNIhJgbQgogQgVgfIgfgwQgQgWgWgTIAiBCQgbgNgSggQgUgngNgUIgNgQQg1g4gBgvIgCgjQgDgTgPgTIgVgeQgPgVgIAAIgVAGQgJgyg0gVQgtgSguAMQgXAFgEAGQgDAEAAAIQgIARhqAcIA8gpQgKgFgbgLIgEgBIgKgEIgFgCQgBgBgGAAQgBAAgLgNQAMgWAIgBQAMgBANgNQgZAKgJgCQgFgBgXgPQAXgOAFAAQANADAUACIgqgZQASgOAdgLQAdgLARAAQArACBMAKQAsAGBQgGQAggDAoAFIBAAGIhFgWQgcgOAFgCIALgBQAJgdBDAJQA5AHAdAQIgCgPQgEADgNgFQgLgFgtgHQgjgGgQgOQAfgOALADIAkAMQAPADATgBIAagBIAYAlQAOAXAQANIgpAUQAZAEAegIQAYgGAXALIAHAFIgGgoQgDgQAGgQQAPAFACAGQAAACgCAIQgFARAlASQANAHAFAAQAJAAAKgMQgOgJgMABQgFAAgPgWQACgDgGgGQABgGAfgBIAbAEQA2gGAXADQAjAFAuAdIBCApQgOASgEAAIgigKIAPAUQAFAKgGAJQhxgUgMgHQAKgIAPgHQAKgFAPgPIgNACQgOgDgCgLQgBgIgWACQggAFgDADQgCABAJAFQATAJg9ARQAUADAGAEIAWAQQgEgBgBACQgBAEgSgCQgZgDgNAAQg6AEgNA6QAcANAvAQQAoAQAcAeQAIgNgBgKQgBgKAFgIQAMgKgDgWIgDgRIACgcQA3gDANAHQAJAFALAfQARgGAGgEQAIgFAPgGQAJATAgAcQAeAbAHASIhGAeIgfgCQABAFgZALIASgCQAZADAoAjIgRAKQgLAFgNACQgZADAFgCQAJgFgjABIh4CSIAMBGQgIgGgXgeQgPgUgZABIhfAZQgCAkABATQACAbAJAUQAnAKAIgSQAIgUAfACIgKA1IAuAKIABBDQAtAGAKgCQANgDAbgWQAFABAJAGQAHACAHgBIAIgBQAegFAVAFQAXAFATATQAMAMAVALIAiAQQALAHAFAGQAFAGAMAJQgGAVAAAFQgDABgOAOQAYgKAVAGQAMAEAeAOIArASIAmATQAAAqgIAOIgYAjQgGANgFAkQgFAfgKANQgHAKgcANQgbAMgJAQIhPBvQgIAJgFAJQgCAFgNAJQgIAGgJACQgKADgOAJIgTAMQAHABgHATIgSA+QgFANgJAOQgEAKAEAMQAEAMABgFQABgEAHAcQg6gDgPgug");
	this.shape_2.setTransform(63.8,90.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#666666").s().p("AqjIWQgeheAEgUQALgiACgOQAEgWgUgpQgVgfgEgMQgGgSASglQgOgMgHACQgLABgSgKQgegSgMADQgkANg7AQQhNhUgEgLQgBgFAEgRQAFgZABghQAAgaABgIQABgPANgUQAIgNANgLQAMgLAIgOQAKgQAGgSQAGgMAWgLQAcgNAxgKQAxgKAiABQAHAQgDAUQgBAGAcAQQAgATAQgFIAlgNQAjgGA5ASQAoAEAEhDQhBALgQgQQgKgbgPgQQgIALABAMQAAAKgQAPIgYgbQgUgegMgNQgTgVgZgLQAHANAGAGIAOAPIARAeIgjgMQgZgTgLgFQgRgIgZAIQgTAHgkAsQgdAjghgHQgcgHgDgWQgBgLAJgtIBHACQAAgYgIgRIgIgPIBcg0QAEgCAcgtQAFAFAAABQAHAfAtgIQAngHAXgVIAFgFIAMgKIAGgDQANgIANgBQAOgCAOgHQgZgJgSAEQgNACgRgLQAAgQAEgIQADgFAMgNIAMgNQg2AMgTBBQgIAcgHAGQgLAJgagOIgsgTQgkgNATgXQAKgLAjgWQAcgRAvgrQAxgeBQAVIBOAWIATAHIAHAJIg3AQIgIACIAIAIQAKAEAagKIAHgDIATgMIALgIQAUgPBigHQBfgHAcAJQgCgRACgOQAEgcAbADQAcADgEAiQgDAdgSASQAUgGAIgJQAHgHASgEQANgDgEAEQgEADAOgFQgJgUgGACQgDAAgEAMQgIARgOgyQAHgEAWgCQAbgEANAGIAeAZQgJgWgDgCQgJgHgKgLQAhgCAqgLIBGgUQBZgXBeASIAKAdICHACQASAHgEAFQgFAFAaAKQAOgGAZAAQAWAAAOgKQAXgPgKgHIgegWIBIACQgDALgFAIQgEAEACAHQAkAOCSAVQAqAHAzgCQA5gDAkAEQAGAjgGAPQgGANAFAUIiZAdQgMARgBANQgBAHg8BFIgHgOIgIgWQgFgiAdgRIATgMQAIgGgDgIQgGgOgFAAQgEAAgMAIQgkAagyAAQgrgBgcALQgfAMgbAfIBHAPQAEAfgBANIgDAoQgEgIAAABIgNg5QgRBHg+AcQhBAdAKAVQAHARAAAEQABAPgTATQgEgFgQggQgLgXgSgHIgFgBIgJgCIgeAUIAIAGIAOAHQAIAEAJADQgXAfAEAFQAPASADAkQgJATgTAXQgUAYgOAHQgoARgEADIgXAoIgNgmIgDgFQgQATAHASQABAEASAYQAMAQgFAPQgGAUgmAdQgUgZgMgWQgLAEgIAKQgHAHgGgBIgNhCIgSAMIgOACIgYhMQg2AQgFAEQgDABghAoIgTAUIgFAkIgHAfQgCAFgOAVQgag2gIgUQgPgrgCgnIgKgDIgNgIQgbgYgGgDQgGgCgrgFQgXgDgJgEIgVgIQgngMgHgHQgOgRgRgLQAAAZAKAQIAXAjIAmgNQANAAAXAaQgHAagRATQgQARgcAPQgPAIgxATQgcAKgFAOQAHAGgCAFIAegDIApgOQACAogZAmQgOAVgoAmQgtAtAHAlIAIAmQAFAcgGAfQgGAQgFADIgIACQgMAEgWBHQgUA/gdAbQglAghHABQgOgYgchZg");
	this.shape_3.setTransform(243.9,76.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,342.6,165.7);


(lib.MUNDO = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2A2A2A").s().p("AA6B4IgDgEIgagJQgPgFAGAAIABAAIAhANQgKgOgBAAQgCAEgGgBIgPgCIgHgEIgMgJQgUgOgSAAQgTABgaAOQgQAMgPAIQgdAOglgDQAAgJAEgZQABgDgMglQgWhBAVgVQANgMAngKQALgFAPgQQAUgWAGgFQAPgMAJgCQANgBAMgIQAVgMAGgGIAjABIADATQAHAVAQALQAIAEAHABIAMgBIAJhGIAWAlQAKAQAKAVQAKAXAAABIANANIAeAoQARAdgEAsQgEAqgUAfQgWAggcAAQghAAghgtg");
	this.shape.setTransform(294.7,130.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#2A2A2A").s().p("AhRCAQgEgHgbhOQgPgsgbgFQg0gCg7gOQArgfApghQAagTAlgBQAdgBADADIAYgUQBFguAwACQALABAlAGQAiAGAeAAQAJAaATAjQAWgDAIgIQAGgHAjgCQgMAZgMAIQgOAJgHALQgLASAAAMQgBAegBAJQgZANgDAHQgFAKgEADIgEACQgRAKgBADQAAABAAAAQAAABAAAAQAAABABAAQAAABABAAQgCAEhZAiQglAOgJAJQgLALgHAlQg6gLgTgeg");
	this.shape_1.setTransform(118.3,16.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#2A2A2A").s().p("AD5LCQgMgkANhKQAUhcAJgvQAQhVgHgyIgggSQgOgKgMgWQg0heAUgzQANgaAFgOQAIgYgIgfQgcgCAJAJQADADgbgLQgRgHgUgYQgVgYgYgNIhJgbQgogQgVgfIgfgwQgQgWgWgTIAiBCQgbgNgSggQgUgngNgUIgNgQQg1g4gBgvIgCgjQgDgTgPgTIgVgeQgPgVgIAAIgVAGQgJgyg0gVQgtgSguAMQgXAFgEAGQgDAEAAAIQgIARhqAcIA8gpQgKgFgbgLIgEgBIgKgEIgFgCQgBgBgGAAQgBAAgLgNQAMgWAIgBQAMgBANgNQgZAKgJgCQgFgBgXgPQAXgOAFAAQANADAUACIgqgZQASgOAdgLQAdgLARAAQArACBMAKQAsAGBQgGQAggDAoAFIBAAGIhFgWQgcgOAFgCIALgBQAJgdBDAJQA5AHAdAQIgCgPQgEADgNgFQgLgFgtgHQgjgGgQgOQAfgOALADIAkAMQAPADATgBIAagBIAYAlQAOAXAQANIgpAUQAZAEAegIQAYgGAXALIAHAFIgGgoQgDgQAGgQQAPAFACAGQAAACgCAIQgFARAlASQANAHAFAAQAJAAAKgMQgOgJgMABQgFAAgPgWQACgDgGgGQABgGAfgBIAbAEQA2gGAXADQAjAFAuAdIBCApQgOASgEAAIgigKIAPAUQAFAKgGAJQhxgUgMgHQAKgIAPgHQAKgFAPgPIgNACQgOgDgCgLQgBgIgWACQggAFgDADQgCABAJAFQATAJg9ARQAUADAGAEIAWAQQgEgBgBACQgBAEgSgCQgZgDgNAAQg6AEgNA6QAcANAvAQQAoAQAcAeQAIgNgBgKQgBgKAFgIQAMgKgDgWIgDgRIACgcQA3gDANAHQAJAFALAfQARgGAGgEQAIgFAPgGQAJATAgAcQAeAbAHASIhGAeIgfgCQABAFgZALIASgCQAZADAoAjIgRAKQgLAFgNACQgZADAFgCQAJgFgjABIh4CSIAMBGQgIgGgXgeQgPgUgZABIhfAZQgCAkABATQACAbAJAUQAnAKAIgSQAIgUAfACIgKA1IAuAKIABBDQAtAGAKgCQANgDAbgWQAFABAJAGQAHACAHgBIAIgBQAegFAVAFQAXAFATATQAMAMAVALIAiAQQALAHAFAGQAFAGAMAJQgGAVAAAFQgDABgOAOQAYgKAVAGQAMAEAeAOIArASIAmATQAAAqgIAOIgYAjQgGANgFAkQgFAfgKANQgHAKgcANQgbAMgJAQIhPBvQgIAJgFAJQgCAFgNAJQgIAGgJACQgKADgOAJIgTAMQAHABgHATIgSA+QgFANgJAOQgEAKAEAMQAEAMABgFQABgEAHAcQg6gDgPgug");
	this.shape_2.setTransform(63.8,90.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#2A2A2A").s().p("AqjIWQgeheAEgUQALgiACgOQAEgWgUgpQgVgfgEgMQgGgSASglQgOgMgHACQgLABgSgKQgegSgMADQgkANg7AQQhNhUgEgLQgBgFAEgRQAFgZABghQAAgaABgIQABgPANgUQAIgNANgLQAMgLAIgOQAKgQAGgSQAGgMAWgLQAcgNAxgKQAxgKAiABQAHAQgDAUQgBAGAcAQQAgATAQgFIAlgNQAjgGA5ASQAoAEAEhDQhBALgQgQQgKgbgPgQQgIALABAMQAAAKgQAPIgYgbQgUgegMgNQgTgVgZgLQAHANAGAGIAOAPIARAeIgjgMQgZgTgLgFQgRgIgZAIQgTAHgkAsQgdAjghgHQgcgHgDgWQgBgLAJgtIBHACQAAgYgIgRIgIgPIBcg0QAEgCAcgtQAFAFAAABQAHAfAtgIQAngHAXgVIAFgFIAMgKIAGgDQANgIANgBQAOgCAOgHQgZgJgSAEQgNACgRgLQAAgQAEgIQADgFAMgNIAMgNQg2AMgTBBQgIAcgHAGQgLAJgagOIgsgTQgkgNATgXQAKgLAjgWQAcgRAvgrQAxgeBQAVIBOAWIATAHIAHAJIg3AQIgIACIAIAIQAKAEAagKIAHgDIATgMIALgIQAUgPBigHQBfgHAcAJQgCgRACgOQAEgcAbADQAcADgEAiQgDAdgSASQAUgGAIgJQAHgHASgEQANgDgEAEQgEADAOgFQgJgUgGACQgDAAgEAMQgIARgOgyQAHgEAWgCQAbgEANAGIAeAZQgJgWgDgCQgJgHgKgLQAhgCAqgLIBGgUQBZgXBeASIAKAdICHACQASAHgEAFQgFAFAaAKQAOgGAZAAQAWAAAOgKQAXgPgKgHIgegWIBIACQgDALgFAIQgEAEACAHQAkAOCSAVQAqAHAzgCQA5gDAkAEQAGAjgGAPQgGANAFAUIiZAdQgMARgBANQgBAHg8BFIgHgOIgIgWQgFgiAdgRIATgMQAIgGgDgIQgGgOgFAAQgEAAgMAIQgkAagyAAQgrgBgcALQgfAMgbAfIBHAPQAEAfgBANIgDAoQgEgIAAABIgNg5QgRBHg+AcQhBAdAKAVQAHARAAAEQABAPgTATQgEgFgQggQgLgXgSgHIgFgBIgJgCIgeAUIAIAGIAOAHQAIAEAJADQgXAfAEAFQAPASADAkQgJATgTAXQgUAYgOAHQgoARgEADIgXAoIgNgmIgDgFQgQATAHASQABAEASAYQAMAQgFAPQgGAUgmAdQgUgZgMgWQgLAEgIAKQgHAHgGgBIgNhCIgSAMIgOACIgYhMQg2AQgFAEQgDABghAoIgTAUIgFAkIgHAfQgCAFgOAVQgag2gIgUQgPgrgCgnIgKgDIgNgIQgbgYgGgDQgGgCgrgFQgXgDgJgEIgVgIQgngMgHgHQgOgRgRgLQAAAZAKAQIAXAjIAmgNQANAAAXAaQgHAagRATQgQARgcAPQgPAIgxATQgcAKgFAOQAHAGgCAFIAegDIApgOQACAogZAmQgOAVgoAmQgtAtAHAlIAIAmQAFAcgGAfQgGAQgFADIgIACQgMAEgWBHQgUA/gdAbQglAghHABQgOgYgchZg");
	this.shape_3.setTransform(243.9,76.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,342.6,165.7);


(lib.logopactamos_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.instance = new lib.logopactamos();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.281,0.281);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,400,400);


(lib.flecizq = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#505050").s().p("AnPRhQhBgThBhCQgzgzgPgUQghgsgGgzQgGg/ATgvQAOgjAogvIGWmXICPiNQBxhzALgPIqhqrQgvgugMgnQgIgZAAhHQAAgYAOggQALgaAPgTQBIhjBTgoQBpgzBiA6QAdARGNGQIHZHdQA1A0AOAUQAjAxAAA2QAABegQAiQgOAghLBLIs7M9IgjAkQgUATgVALQg0AbgyAAQgcAAgagIg");
	this.shape.setTransform(0,0,0.634,0.634,180);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-44.4,-71.6,88.9,143.3);


(lib.flecha = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#505050").s().p("AnPRhQhBgThBhCQgzgzgPgUQghgsgGgzQgGg/ATgvQAOgjAogvIGWmXICPiNQBxhzALgPIqhqrQgvgugMgnQgIgZAAhHQAAgYAOggQALgaAPgTQBIhjBTgoQBpgzBiA6QAdARGNGQIHZHdQA1A0AOAUQAjAxAAA2QAABegQAiQgOAghLBLIs7M9IgjAkQgUATgVALQg0AbgyAAQgcAAgagIg");
	this.shape.setTransform(0,0,0.634,0.634);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-44.4,-71.6,88.9,143.3);


(lib.EDIFICIO = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#ECBE35").s().p("EggNAYuIAAjMIANAAMAAAguPITuAAIAAMWIWhAAIAAQGILRADIABm2IKtgCIAAAJIqOAAIgCGzIrsADIACU1gA6YVjIIdAAIABmIIoegDgAByScIFpACIAAmLIlpAAgAmpSdIFpABIAAmLIlpAAgA9MJHQAiAKGRAAQGEABBPgHIgBjCIuEgBgAByJMIFpABIAAmKIlpgBgAmpJNIFpAAIAAmKIlpgBgA2ZgGQmRABgiAJIAAC7IOCAEIAEjDQhIgGlbAAIgwAAgABygCIFnABIACmLIlmAAgAmpgBIFnAAIACmLIlmAAgA9MjNQAfAJGUABQGMABBHgHIgBjCIuEgBgA2ZscQmRABgiALIAAC7IOCAEIAEjEQhIgHlbAAIgwAAgA9MvjQAfAJGUABQGMABBHgHIgBjCIuEgBg");
	this.shape.setTransform(206.2,158.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(0.6,0,0,22.9).p("AVTBlMgqgAAAIAAjJIAMAA");
	this.shape_1.setTransform(135.9,306.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#ECBE35").s().p("AmvHZIAAg8IA8ABIAAt2IF1AAIAADyIGugCIAALBgAkLGeICnAAIAAh2IinAAgAEOFmIBuAAIAAh1IhuAAgABsFmIBvAAIAAh1IhvAAgAlBC2IERAAIAAhFIkRAAgAEOC1IBuAAIAAh2IhuAAgABsC1IBvAAIAAh2IhvAAgAlBBBIERAAIAAhDIkRAAgAEOADIBuAAIAAhzIhuAAgABsADIBvAAIAAhzIhvAAgAlBgyIERAAIAAhFIkRAAgAlBinIERAAIAAhEIkRAAgAlBkcIERAAIAAhEIkRAAg");
	this.shape_2.setTransform(450.8,269.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#ECBE35").ss(0.6,0,0,22.9).p("ACDqfIHlAAIAABzInlAAgACDm8IHlAAIAABzInlAAgArCm+ILqgEIACm0IKZAAIAAawIg8AAIAAA9I1HgDgACDjYIHlAAIAABzInlAAgACDAJIHlAAIAABzInlAAgAlijlIDLAAIAADnIjLAAgAliG1IDLAAIAADoIjLAAgACDDtIHlAAIAABzInlAAgADlIgIEnAAIAADrIknAAgAliBnIDLAAIAADoIjLAAgAqEjlIDKAAIAADnIjKAAgAqEG1IDKAAIAADoIjKAAgAqEBnIDKAAIAADoIjKAAg");
	this.shape_3.setTransform(342.8,228);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#2A2A2A").s().p("AizDEIADmIIFkAAIgCGJg");
	this.shape_4.setTransform(235.7,138.2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#2A2A2A").s().p("AizDFIADmJIFkAAIgCGJg");
	this.shape_5.setTransform(181.6,138.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#2A2A2A").s().p("AizDDIAAmHIFnAAIAAGJg");
	this.shape_6.setTransform(235.8,256.7);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#2A2A2A").s().p("AizDEIAAmIIFnABIAAGIg");
	this.shape_7.setTransform(235.8,197.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#2A2A2A").s().p("AizDEIAAmIIFnAAIAAGJg");
	this.shape_8.setTransform(181.6,256.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#2A2A2A").s().p("AizDFIAAmJIFnABIAAGIg");
	this.shape_9.setTransform(181.6,197.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#2A2A2A").s().p("AnBBhIgBi5QAigLGSgBQGEAABNAHIgEDCg");
	this.shape_10.setTransform(64.4,88.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#2A2A2A").s().p("AnBBhIgBi5QAjgLGRgBQGEAABNAHIgEDCg");
	this.shape_11.setTransform(64.4,167.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#2A2A2A").s().p("AgOBkQmUgBgggJIACi9IOCABIAADAQhBAGlaAAIg1AAg");
	this.shape_12.setTransform(64.4,49.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#2A2A2A").s().p("AgOBkQmUgBgggJIACi9IOCABIAADAQhBAGlaAAIg1AAg");
	this.shape_13.setTransform(64.4,128.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#2A2A2A").s().p("AgOBkQmSAAgigKIABi9IODABIABDAQhKAGlTAAIg0AAg");
	this.shape_14.setTransform(64.4,207.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#2A2A2A").s().p("AkNDFIAAmJIIbAEIAAGFg");
	this.shape_15.setTransform(64.4,276.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1269.1,0,2190.9,317.7);


(lib.chuloai = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFFFFF","#FFFFE7","#FFFFE7"],[0,0.89,1],0,0,0,0,0,109.9).s().p("AhdQ6IgTgUIgYgXQgGgFgPgVIhEhEIgUgSIiOh9IhbhHQgegWgCgEQgPgIgogcIg+gqIhXgzIgGgEQgWgMghgQIg4gaQgigMgFgFIgWgvIgLgbIgMgeIgNgeIgghbQgFgHgCgIQgMgjAHgLQAHgKAeACQAfADBOAaQA4ATA2AWIAaAMIAmAPIC3BUIBIAlQA8AfALAJIAvAbQAdATAHACIAAg0QAAg/AQiGQAPhiALguIAThPQAMgsAKggIAJgSQABgNAchNQAYhEAsheQAuhkAgg5IBXiPQAphCA4hKQAagjAngvQAwg7ATgTIApgqQAYgaAWgTIAfgcIAPgNQAKgHAFgGQAIgKAZgQQAXgOAPgGQAVgIAQADQAPADAWAQIAEAEIADACQAKAEAZATIAiAdIBxBqQBHBCAsAjIATASQAKALAKAGIgWAMIhVBAQhLA9hoBdIg1A1QgkAjgNAQIgtAwQigCzgWAyIgrA/QgZAig6BeIg5BlIhWC1IggBNQg/CogkC3QgmDBACCrQgEgBgOgPg");
	this.shape.setTransform(97.6,109.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,195.3,219.8);


(lib.b6beneficios = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#005BEE","#0041E5"],[0,1],0,0,0,0,0,102.8).s("rgba(69,69,69,0)").ss(1,1,1).rc(-100,-23.85,200,47.7,23.85,23.85,0,0);
	this.shape.setTransform(-56,-13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-157,-38.2,202,49.7);


(lib._06fondo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#542AD7","#430287"],[0,1],0,0,0,0,0,639.5).s("#000000").ss(1,1,1).dr(-600,-221.1,1200,442.2);
	this.shape.setTransform(0,0,1,1.149,0,0,-1.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-600.9,-273.8,1202,547.7);


(lib._05fondo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#541E1C","#431009"],[0,1],0,0,0,0,0,639.5).s("#000000").ss(1,1,1).dr(-600,-221.1,1200,442.2);
	this.shape.setTransform(0,0,1,1.149,0,0,-1.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-600.9,-273.8,1202,547.7);


(lib._5nomina = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#6D0212","#3F192E"],[0,1],-100,0,100,0).s("rgba(255,243,255,0)").ss(1,1,1).rc(-100,-23.85,200,47.7,23.85,23.85,0,0);
	this.shape.setTransform(-56,-13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-157,-38.2,202,49.7);


(lib._04fondo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FF5407","#FF1009"],[0,1],0,0,0,0,0,639.5).s("#000000").ss(1,1,1).dr(-600,-221.1,1200,442.2);
	this.shape.setTransform(0,0,1,1.149,0,0,-1.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-600.9,-273.8,1202,547.7);


(lib._4suministro = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FC7B10","#F74807"],[0,1],0,0,0,0,0,102.8).s("rgba(255,243,255,0)").ss(1,1,1).rc(-100,-23.85,200,47.7,23.85,23.85,0,0);
	this.shape.setTransform(-56,-13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-157,-38.2,202,49.7);


(lib._03fondo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#A809B8","#7700B4"],[0,1],0,0,0,0,0,639.5).s("#000000").ss(1,1,1).dr(-600,-221.1,1200,442.2);
	this.shape.setTransform(0,0,1,1.149,0,0,-1.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-600.9,-273.8,1202,547.7);


(lib._3seleccion = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#7E3FEE","#6625EC"],[0,1],-100,0,100,0).s("rgba(255,243,255,0)").ss(1,1,1).rc(-100,-23.85,200,47.7,23.85,23.85,0,0);
	this.shape.setTransform(-56,-13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-157,-38.2,202,49.7);


(lib._02fondo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#E90000","#830015"],[0,1],0,0,0,0,0,639.5).s("#000000").ss(1,1,1).dr(-600,-221.1,1200,442.2);
	this.shape.setTransform(0,0,1,1.149,0,0,-1.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-600.9,-273.8,1202,547.7);


(lib._2como = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FF0000","#8C0020"],[0,1],-100,0,100,0).s("rgba(255,243,255,0)").ss(1,1,1).rc(-100,-23.85,200,47.7,23.85,23.85,0,0);
	this.shape.setTransform(-56,-13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-157,-38.2,202,49.7);


(lib._01fondo1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFD904","#FFBD0B"],[0,1],0,0,0,0,0,639.5).s("#000000").ss(1,1,1).dr(-600,-221.1,1200,442.2);
	this.shape.setTransform(0,0,1,1.149,0,0,-1.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-600.9,-273.8,1202,547.7);


(lib._1hacemos = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FFC21E","#FF7B00"],[0,1],-100,13.4,212.1,13.4).s("rgba(255,243,255,0)").ss(1,1,1).rc(-100,-23.85,200,47.7,23.85,23.85,0,0);
	this.shape.setTransform(-56,-13.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-157,-38.2,202,49.7);


(lib.Símbolo3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.text = new cjs.Text("Inducción de ingreso a la temporal.", "30px 'Arial'", "#FFFFFF");
	this.text.lineHeight = 35;
	this.text.lineWidth = 420;
	this.text.parent = this;
	this.text.setTransform(88.3,26.7);

	this.instance = new lib.chuloai("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(46.9,52.9,0.48,0.48,0,0,0,97.7,110);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance},{t:this.text}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,510.2,105.6);


(lib.Símbolo1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa 1
	this.instance = new lib.logopactamos_1();
	this.instance.parent = this;
	this.instance.setTransform(555,2,0.01,0.01,0,0,0,195.1,195.1);

	this.text = new cjs.Text("La calidad del servicio la brinda\nnuestro Recurso Humano", "40px 'Impact'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 51;
	this.text.lineWidth = 1196;
	this.text.parent = this;
	this.text.setTransform(600,204);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.text},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,1200,321.3);


// stage content:
(lib.brochurepactamosproyecto = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_51 = function() {
		this.quehacemos1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_2.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_2()
		{
			this.gotoAndPlay(80);
		}
		this.quehacemos2.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_2.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_2()
		{
			this.gotoAndPlay(80);
		}
		
		this.boton2.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_5.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_5()
		{
			this.gotoAndPlay(101);
		}
		this.botonrojo.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_5.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_5()
		{
			this.gotoAndPlay(101);
		}
		
		this.morado2.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_6.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_6()
		{
			this.gotoAndPlay(142);
		}
		
		this.morado1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_6.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_6()
		{
			this.gotoAndPlay(142);
		}
		
		this.naranja1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_7.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_7()
		{
			this.gotoAndPlay(182);
		}
		
		this.naranja2.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_7.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_7()
		{
			this.gotoAndPlay(182);
		}
		
		this.cafe1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_8.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_8()
		{
			this.gotoAndPlay(220);
		}
		
		this.cafe2.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_8.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_8()
		{
			this.gotoAndPlay(220);
		}
		
		
		this.azul1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_9.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_9()
		{
			this.gotoAndPlay(302);
		}
		
		
		
		this.azul2.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_9.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_9()
		{
			this.gotoAndPlay(302);
		}
	}
	this.frame_70 = function() {
		/* Hacer clic para ir a página Web
		Al hacer clic en la instancia del símbolo especificado, la dirección URL se carga en una nueva ventana del navegador.
		
		Instrucciones:
		1. Reemplace http://www.adobe.com por la dirección URL que desee.
		      Conserve las comillas ("").
		*/
		
		this.WWW.addEventListener("click", fl_ClickToGoToWebPage_2);
		
		function fl_ClickToGoToWebPage_2() {
			window.open("http://www.pactamos.com/empleo/index.php/contact", "_blank");
		}
	}
	this.frame_78 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_83 = function() {
		/* Hacer clic para ir al fotograma y reproducir
		Al hacer clic en la instancia del símbolo especificado, la cabeza lectora se mueve hasta el fotograma especificado en la línea de tiempo y prosigue la reproducción desde dicho fotograma.
		Se puede utilizar en la línea de tiempo principal o en líneas de tiempo de clips de película.
		
		Instrucciones:
		1. Reemplace el número 5 del siguiente código por el número de fotograma hasta el que quiere que se mueva la cabeza lectora cuando se haga clic en la instancia del símbolo.
		2.Los números de fotograma en EaselJS empiezan con 0 en vez de 1
		*/
		
		this.der1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_13.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_13()
		{
			this.gotoAndPlay(91);
		}
	}
	this.frame_89 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_92 = function() {
		/* Hacer clic para ir al fotograma y reproducir
		Al hacer clic en la instancia del símbolo especificado, la cabeza lectora se mueve hasta el fotograma especificado en la línea de tiempo y prosigue la reproducción desde dicho fotograma.
		Se puede utilizar en la línea de tiempo principal o en líneas de tiempo de clips de película.
		
		Instrucciones:
		1. Reemplace el número 5 del siguiente código por el número de fotograma hasta el que quiere que se mueva la cabeza lectora cuando se haga clic en la instancia del símbolo.
		2.Los números de fotograma en EaselJS empiezan con 0 en vez de 1
		*/
		
		this.izq1.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_15.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_15()
		{
			this.gotoAndPlay(84);
		}
	}
	this.frame_99 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_120 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop(120);
	}
	this.frame_139 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_179 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_218 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_259 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_317 = function() {
		/* Hacer clic para ir al fotograma y reproducir
		Al hacer clic en la instancia del símbolo especificado, la cabeza lectora se mueve hasta el fotograma especificado en la línea de tiempo y prosigue la reproducción desde dicho fotograma.
		Se puede utilizar en la línea de tiempo principal o en líneas de tiempo de clips de película.
		
		Instrucciones:
		1. Reemplace el número 5 del siguiente código por el número de fotograma hasta el que quiere que se mueva la cabeza lectora cuando se haga clic en la instancia del símbolo.
		2.Los números de fotograma en EaselJS empiezan con 0 en vez de 1
		*/
		
		this.fleder.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_10.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_10()
		{
			this.gotoAndPlay(322);
		}
	}
	this.frame_320 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}
	this.frame_324 = function() {
		/* Hacer clic para ir al fotograma y reproducir
		Al hacer clic en la instancia del símbolo especificado, la cabeza lectora se mueve hasta el fotograma especificado en la línea de tiempo y prosigue la reproducción desde dicho fotograma.
		Se puede utilizar en la línea de tiempo principal o en líneas de tiempo de clips de película.
		
		Instrucciones:
		1. Reemplace el número 5 del siguiente código por el número de fotograma hasta el que quiere que se mueva la cabeza lectora cuando se haga clic en la instancia del símbolo.
		2.Los números de fotograma en EaselJS empiezan con 0 en vez de 1
		*/
		
		this.fleizq.addEventListener("click", fl_ClickToGoToAndPlayFromFrame_12.bind(this));
		
		function fl_ClickToGoToAndPlayFromFrame_12()
		{
			this.gotoAndPlay(311);
		}
	}
	this.frame_349 = function() {
		/* Detener en este fotograma
		La línea de tiempo se detendrá/pausará en el fotograma en el que se inserte este código.
		También se puede utilizar para detener/pausar la línea de tiempo de clips de película.
		*/
		
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(51).call(this.frame_51).wait(19).call(this.frame_70).wait(8).call(this.frame_78).wait(5).call(this.frame_83).wait(6).call(this.frame_89).wait(3).call(this.frame_92).wait(7).call(this.frame_99).wait(21).call(this.frame_120).wait(19).call(this.frame_139).wait(40).call(this.frame_179).wait(39).call(this.frame_218).wait(41).call(this.frame_259).wait(58).call(this.frame_317).wait(3).call(this.frame_320).wait(4).call(this.frame_324).wait(25).call(this.frame_349).wait(1));

	// WEB
	this.WWW = new cjs.Text("WWW.PACTAMOS.COM", "17px 'Impact'", "#D7C200");
	this.WWW.name = "WWW";
	this.WWW.lineHeight = 23;
	this.WWW.lineWidth = 154;
	this.WWW.parent = this;
	this.WWW.setTransform(1029.9,12.9);
	this.WWW._off = true;

	this.timeline.addTween(cjs.Tween.get(this.WWW).wait(70).to({_off:false},0).wait(280));

	// logo top
	this.instance = new lib.logopactamos_1();
	this.instance.parent = this;
	this.instance.setTransform(103.3,102.3,0.457,0.457,0,0,0,200.2,200);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(79).to({_off:false},0).wait(1).to({regX:200,x:103.1,y:102.2,alpha:0.25},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.75},0).wait(1).to({alpha:1},0).wait(267));

	// flizq
	this.fleizq = new lib.flecizq();
	this.fleizq.parent = this;
	this.fleizq.setTransform(45,522.5);
	this.fleizq.alpha = 0;
	this.fleizq._off = true;
	new cjs.ButtonHelper(this.fleizq, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.fleizq).wait(324).to({_off:false},0).wait(1).to({alpha:0.333},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:1},0).wait(23));

	// flder
	this.fleder = new lib.flecha();
	this.fleder.parent = this;
	this.fleder.setTransform(1155.5,532.3);
	this.fleder.alpha = 0;
	this.fleder._off = true;
	new cjs.ButtonHelper(this.fleder, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.fleder).wait(317).to({_off:false},0).wait(1).to({y:532,alpha:0.5},0).wait(1).to({y:531.7,alpha:1},0).wait(1).to({y:531.9},0).wait(1).to({y:532.2},0).wait(1).to({x:1223.6,y:521.5},0).wait(1).to({x:1291.7,y:510.9},0).to({_off:true},1).wait(26));

	// 0614
	this.text = new cjs.Text("Cuenta en su empresa con empleados que reciben capacitaciones en las distintas áreas como son relaciones interpersonales,  motivacionales, y productivos que ayudan en el desarrollo de su empresa", "27px 'Arial'", "#FFFFFF");
	this.text.lineHeight = 31;
	this.text.lineWidth = 455;
	this.text.parent = this;
	this.text.setTransform(1938.9,334.2);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(321).to({_off:false},0).wait(1).to({x:1505.5},0).wait(1).to({x:1072.1},0).wait(1).to({x:638.8},0).wait(1).to({x:708.6},0).wait(1).to({x:778.4},0).wait(1).to({x:746.1},0).wait(23));

	// 0313
	this.text_1 = new cjs.Text("7", "92px 'Impact'", "#FFFFFF");
	this.text_1.lineHeight = 113;
	this.text_1.lineWidth = 36;
	this.text_1.parent = this;
	this.text_1.setTransform(1894.9,318.5);
	this.text_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_1).wait(321).to({_off:false},0).wait(1).to({x:1461.5},0).wait(1).to({x:1028.1},0).wait(1).to({x:594.8},0).wait(1).to({x:664.6},0).wait(1).to({x:734.4},0).wait(1).to({x:702.1},0).wait(23));

	// 0612
	this.text_2 = new cjs.Text("A través de nuestra página web www.pactamos.com usted puede consultar en línea el listado del personal que labora con usted y verificar la liquidación de los pagos de nómina.", "27px 'Arial'", "#FFFFFF");
	this.text_2.lineHeight = 31;
	this.text_2.lineWidth = 514;
	this.text_2.parent = this;
	this.text_2.setTransform(1345.8,394.6);
	this.text_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_2).wait(321).to({_off:false},0).wait(1).to({x:912.4},0).wait(1).to({x:479},0).wait(1).to({x:45.7},0).wait(1).to({x:115.5},0).wait(1).to({x:185.3},0).wait(1).to({x:153},0).wait(23));

	// 0311
	this.text_3 = new cjs.Text("6", "92px 'Impact'", "#FFFFFF");
	this.text_3.lineHeight = 113;
	this.text_3.lineWidth = 50;
	this.text_3.parent = this;
	this.text_3.setTransform(1278.8,383.5);
	this.text_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_3).wait(321).to({_off:false},0).wait(1).to({x:845.4},0).wait(1).to({x:412},0).wait(1).to({x:-21.3},0).wait(1).to({x:48.5},0).wait(1).to({x:118.3},0).wait(1).to({x:86},0).wait(23));

	// 0610
	this.text_4 = new cjs.Text("Tiene tiempo para usted y su familia al dejar la carga administrativa en manos de profesionales en el manejo del recurso humano.", "27px 'Arial'", "#FFFFFF");
	this.text_4.lineHeight = 31;
	this.text_4.lineWidth = 459;
	this.text_4.parent = this;
	this.text_4.setTransform(1935,131);
	this.text_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_4).wait(321).to({_off:false},0).wait(1).to({x:1501.6},0).wait(1).to({x:1068.2},0).wait(1).to({x:634.8},0).wait(1).to({x:704.6},0).wait(1).to({x:774.5},0).wait(1).to({x:742.2},0).wait(23));

	// 0309
	this.text_5 = new cjs.Text("5", "92px 'Impact'", "#FFFFFF");
	this.text_5.lineHeight = 113;
	this.text_5.lineWidth = 49;
	this.text_5.parent = this;
	this.text_5.setTransform(1863.4,112);
	this.text_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_5).wait(321).to({_off:false},0).wait(1).to({x:1430},0).wait(1).to({x:996.6},0).wait(1).to({x:563.2},0).wait(1).to({x:633},0).wait(1).to({x:702.9},0).wait(1).to({x:670.6},0).wait(23));

	// 0608
	this.text_6 = new cjs.Text("En las épocas de temporada cuenta con el personal idóneo y suficiente para suplir con las demandas del mercado cada vez que no está obligado  a realizar un vínculo con los empleados por largos periodos de tiempo.", "27px 'Arial'", "#FFFFFF");
	this.text_6.lineHeight = 31;
	this.text_6.lineWidth = 562;
	this.text_6.parent = this;
	this.text_6.setTransform(1314.3,202.3);
	this.text_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_6).wait(321).to({_off:false},0).wait(1).to({x:880.9},0).wait(1).to({x:447.5},0).wait(1).to({x:14.1},0).wait(1).to({x:83.9},0).wait(1).to({x:153.8},0).wait(1).to({x:121.5},0).wait(23));

	// 0307
	this.text_7 = new cjs.Text("4", "92px 'Impact'", "#FFFFFF");
	this.text_7.lineHeight = 113;
	this.text_7.lineWidth = 46;
	this.text_7.parent = this;
	this.text_7.setTransform(1249.1,187.6);
	this.text_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_7).wait(321).to({_off:false},0).wait(1).to({x:815.7},0).wait(1).to({x:382.3},0).wait(1).to({x:-51.1},0).wait(1).to({x:18.7},0).wait(1).to({x:88.6},0).wait(1).to({x:56.3},0).wait(23));

	// 0606
	this.text_8 = new cjs.Text("Se libera como jefe del manejo disciplinario de cada empleado, también de citaciones y demandas a que haya lugar debido al correcto proceso de vinculación de cada empleado y el apoyo jurídico de PACTAMOS.", "27px 'Arial'", "#FFFFFF");
	this.text_8.lineHeight = 31;
	this.text_8.lineWidth = 694;
	this.text_8.parent = this;
	this.text_8.setTransform(-1042.8,425.8);
	this.text_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_8).wait(310).to({_off:false},0).wait(1).to({x:-619.7},0).wait(1).to({x:-196.7},0).wait(1).to({x:226.4},0).wait(1).to({x:147.2},0).wait(1).to({x:68.1},0).wait(1).to({x:101.9},0).wait(4).to({_off:true},1).wait(29));

	// 0605
	this.text_9 = new cjs.Text("3", "92px 'Impact'", "#FFFFFF");
	this.text_9.lineHeight = 113;
	this.text_9.lineWidth = 49;
	this.text_9.parent = this;
	this.text_9.setTransform(-1099.5,425.8);
	this.text_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_9).wait(310).to({_off:false},0).wait(1).to({x:-676.5},0).wait(1).to({x:-253.4},0).wait(1).to({x:169.6},0).wait(1).to({x:90.5},0).wait(1).to({x:11.4},0).wait(1).to({x:45.2},0).wait(4).to({_off:true},1).wait(29));

	// 0604
	this.text_10 = new cjs.Text("Usted como empresario se puede enfocar realmente en la actividad para la cual creo su empresa y no en temas administrativos que le reducen tiempo trabajo y dinero a la vez que SI suman stress y altos costos de operación para la empresa.", "27px 'Arial'", "#FFFFFF");
	this.text_10.lineHeight = 31;
	this.text_10.lineWidth = 331;
	this.text_10.parent = this;
	this.text_10.setTransform(-333,190.4);
	this.text_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_10).wait(310).to({_off:false},0).wait(1).to({x:90.1},0).wait(1).to({x:513.1},0).wait(1).to({x:936.2},0).wait(1).to({x:857},0).wait(1).to({x:777.9},0).wait(1).to({x:811.7},0).wait(4).to({_off:true},1).wait(29));

	// 0603
	this.text_11 = new cjs.Text("2", "92px 'Impact'", "#FFFFFF");
	this.text_11.lineHeight = 113;
	this.text_11.lineWidth = 46;
	this.text_11.parent = this;
	this.text_11.setTransform(-395,176);
	this.text_11._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_11).wait(310).to({_off:false},0).wait(1).to({x:28},0).wait(1).to({x:451.1},0).wait(1).to({x:874.1},0).wait(1).to({x:795},0).wait(1).to({x:715.9},0).wait(1).to({x:749.7},0).wait(4).to({_off:true},1).wait(29));

	// 0602
	this.text_12 = new cjs.Text("Eliminamos la carga administrativa, operativa y contable de las empresas, de igual manera ayudamos a reducir los altos costos que se generan por estas actividades. ", "27px 'Arial'", "#FFFFFF");
	this.text_12.lineHeight = 31;
	this.text_12.lineWidth = 475;
	this.text_12.parent = this;
	this.text_12.setTransform(-1052.2,205.1);
	this.text_12._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_12).wait(310).to({_off:false},0).wait(1).to({x:-629.2},0).wait(1).to({x:-206.1},0).wait(1).to({x:216.9},0).wait(1).to({x:137.8},0).wait(1).to({x:58.7},0).wait(1).to({x:92.5},0).wait(4).to({_off:true},1).wait(29));

	// 0601
	this.text_13 = new cjs.Text("1", "92px 'Impact'", "#FFFFFF");
	this.text_13.lineHeight = 113;
	this.text_13.lineWidth = 35;
	this.text_13.parent = this;
	this.text_13.setTransform(-1131,205.1);
	this.text_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_13).wait(310).to({_off:false},0).wait(1).to({x:-707.9},0).wait(1).to({x:-284.9},0).wait(1).to({x:138.2},0).wait(1).to({x:59},0).wait(1).to({x:-20.1},0).wait(1).to({x:13.7},0).wait(4).to({_off:true},1).wait(29));

	// 06 titulo copia
	this.text_14 = new cjs.Text("PACTAMOS ", "74px 'Impact'", "#4911A6");
	this.text_14.lineHeight = 91;
	this.text_14.lineWidth = 323;
	this.text_14.parent = this;
	this.text_14.setTransform(564.4,39.6);
	this.text_14._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_14).wait(310).to({_off:false},0).wait(40));

	// 06 titulo
	this.text_15 = new cjs.Text("Beneficios de trabajar con", "45px 'Impact'", "#003399");
	this.text_15.lineHeight = 56;
	this.text_15.lineWidth = 544;
	this.text_15.parent = this;
	this.text_15.setTransform(371.6,2);
	this.text_15._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_15).wait(310).to({_off:false},0).wait(40));

	// 0506
	this.text_16 = new cjs.Text("Se realiza el pago de la nómina de los trabajadores a través de entidades bancarias o de la manera que se acuerde con la empresa que se pacta.", "30px 'Arial'", "#FFFFFF");
	this.text_16.lineHeight = 35;
	this.text_16.lineWidth = 747;
	this.text_16.parent = this;
	this.text_16.setTransform(216.3,437.6);
	this.text_16._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_16).wait(256).to({_off:false},0).to({_off:true},45).wait(49));

	// 0505
	this.text_17 = new cjs.Text("3", "96px 'Impact'", "#FFFFFF");
	this.text_17.lineHeight = 118;
	this.text_17.lineWidth = 51;
	this.text_17.parent = this;
	this.text_17.setTransform(147.7,423);
	this.text_17._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_17).wait(256).to({_off:false},0).to({_off:true},45).wait(49));

	// 0504
	this.text_18 = new cjs.Text("Se realiza la pre-nomina en cada quincena para presentar a la empresa usuaria para su aceptación.   ", "30px 'Arial'", "#FFFFFF");
	this.text_18.lineHeight = 35;
	this.text_18.lineWidth = 408;
	this.text_18.parent = this;
	this.text_18.setTransform(757.6,210.4);
	this.text_18._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_18).wait(243).to({_off:false},0).to({_off:true},58).wait(49));

	// 0503
	this.text_19 = new cjs.Text("2", "96px 'Impact'", "#FFFFFF");
	this.text_19.lineHeight = 118;
	this.text_19.lineWidth = 48;
	this.text_19.parent = this;
	this.text_19.setTransform(705.3,195.7);
	this.text_19._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_19).wait(243).to({_off:false},0).to({_off:true},58).wait(49));

	// 0502
	this.text_20 = new cjs.Text("Se toman las novedades de salarios,  bonificaciones, rodamientos, comisiones, descuentos, incapacidades, licencias, de cada uno de los empleados para crear la prenomina.", "30px 'Arial'", "#FFFFFF");
	this.text_20.lineHeight = 35;
	this.text_20.lineWidth = 577;
	this.text_20.parent = this;
	this.text_20.setTransform(68.9,210.4);
	this.text_20._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_20).wait(232).to({_off:false},0).to({_off:true},69).wait(49));

	// 0501
	this.text_21 = new cjs.Text("1", "96px 'Impact'", "#FFFFFF");
	this.text_21.lineHeight = 118;
	this.text_21.lineWidth = 37;
	this.text_21.parent = this;
	this.text_21.setTransform(13.7,193.7);
	this.text_21._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_21).wait(232).to({_off:false},0).to({_off:true},69).wait(49));

	// 05 titulo
	this.text_22 = new cjs.Text("NOMINA ", "83px 'Impact'", "#660000");
	this.text_22.lineHeight = 102;
	this.text_22.lineWidth = 272;
	this.text_22.parent = this;
	this.text_22.setTransform(-304.2,49);
	this.text_22._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_22).wait(220).to({_off:false},0).wait(1).to({x:-71.6},0).wait(1).to({x:161},0).wait(1).to({x:393.6},0).wait(1).to({x:626.3},0).wait(1).to({x:632.1},0).wait(1).to({x:637.9},0).wait(1).to({x:643.7},0).wait(1).to({x:649.5},0).wait(1).to({x:655.3},0).wait(1).to({x:661.1},0).wait(1).to({x:666.9},0).wait(1).to({x:668.4},0).wait(1).to({x:669.9},0).wait(1).to({x:671.5},0).wait(1).to({x:673},0).wait(1).to({x:674.5},0).wait(1).to({x:676.1},0).wait(1).to({x:677.6},0).wait(1).to({x:679.1},0).wait(1).to({x:680.7},0).wait(1).to({x:682.2},0).wait(1).to({x:683.8},0).wait(1).to({x:685.3},0).wait(1).to({x:686.8},0).wait(1).to({x:688.4},0).wait(1).to({x:689.9},0).wait(1).to({x:691.4},0).wait(1).to({x:693},0).wait(1).to({x:694.5},0).wait(1).to({x:696.1},0).wait(1).to({x:697.6},0).wait(1).to({x:699.1},0).wait(1).to({x:700.7},0).wait(1).to({x:702.2},0).wait(1).to({x:703.7},0).wait(1).to({x:705.3},0).wait(1).to({x:706.8},0).wait(1).to({x:708.4},0).wait(1).to({_off:true},1).wait(90));

	// 05 titulo
	this.text_23 = new cjs.Text("ADMINISTRACION DE ", "50px 'Impact'", "#660000");
	this.text_23.lineHeight = 62;
	this.text_23.lineWidth = 418;
	this.text_23.parent = this;
	this.text_23.setTransform(1231.6,12.9);
	this.text_23._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_23).wait(220).to({_off:false},0).wait(1).to({x:1080.2},0).wait(1).to({x:928.9},0).wait(1).to({x:777.6},0).wait(1).to({x:626.3},0).wait(1).to({x:611.5},0).wait(1).to({x:596.7},0).wait(1).to({x:582},0).wait(1).to({x:567.2},0).wait(1).to({x:552.4},0).wait(1).to({x:537.7},0).wait(1).to({x:522.9},0).wait(1).to({x:521.4,y:12.8},0).wait(1).to({x:519.9,y:12.7},0).wait(1).to({x:518.5,y:12.6},0).wait(1).to({x:517,y:12.5},0).wait(1).to({x:515.5},0).wait(1).to({x:514,y:12.4},0).wait(1).to({x:512.6,y:12.3},0).wait(1).to({x:511.1,y:12.2},0).wait(1).to({x:509.6,y:12.1},0).wait(1).to({x:508.1},0).wait(1).to({x:506.6,y:12},0).wait(1).to({x:505.2,y:11.9},0).wait(1).to({x:503.7,y:11.8},0).wait(1).to({x:502.2,y:11.7},0).wait(1).to({x:500.7},0).wait(1).to({x:499.3,y:11.6},0).wait(1).to({x:497.8,y:11.5},0).wait(1).to({x:496.3,y:11.4},0).wait(1).to({x:494.8,y:11.3},0).wait(1).to({x:493.3},0).wait(1).to({x:491.9,y:11.2},0).wait(1).to({x:490.4,y:11.1},0).wait(1).to({x:488.9,y:11},0).wait(1).to({x:487.4,y:10.9},0).wait(1).to({x:486},0).wait(1).to({x:484.5,y:11.9},0).wait(1).to({x:483,y:12.9},0).wait(1).to({_off:true},1).wait(90));

	// 05 titulo
	this.text_24 = new cjs.Text("Suministro ", "96px 'Impact'", "#FC0000");
	this.text_24.lineHeight = 118;
	this.text_24.lineWidth = 490;
	this.text_24.parent = this;
	this.text_24.setTransform(1392.3,-15);
	this.text_24._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_24).wait(228).to({_off:false},0).to({_off:true},39).wait(83));

	// Capa 15 copia copia copia copia
	this.instance_1 = new lib.Símbolo3();
	this.instance_1.parent = this;
	this.instance_1.setTransform(874.5,529.8,1,1,0,0,0,255.1,52.8);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(207).to({_off:false},0).wait(1).to({regX:254.1,x:873.5},0).wait(10).to({_off:true},1).wait(131));

	// Capa 15 copia copia copia
	this.text_25 = new cjs.Text("Se firma el Contrato laboral.", "30px 'Arial'", "#FFFFFF");
	this.text_25.lineHeight = 35;
	this.text_25.lineWidth = 420;
	this.text_25.parent = this;
	this.text_25.setTransform(648,418.6);

	this.instance_2 = new lib.chuloai("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(620.6,422.5,0.48,0.48,0,0,0,97.7,110);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_2},{t:this.text_25}]},202).to({state:[{t:this.instance_2},{t:this.text_25}]},16).to({state:[]},1).wait(131));

	// Capa 15 copia copia
	this.text_26 = new cjs.Text("Apertura de cuenta bancaria del empleado para el debido pago de su nómina.", "30px 'Arial'", "#FFFFFF");
	this.text_26.lineHeight = 35;
	this.text_26.lineWidth = 420;
	this.text_26.parent = this;
	this.text_26.setTransform(151.8,398.3);

	this.instance_3 = new lib.chuloai("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(102.9,449.1,0.48,0.48,0,0,0,97.7,110);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_3},{t:this.text_26}]},197).to({state:[{t:this.instance_3},{t:this.text_26}]},21).to({state:[]},1).wait(131));

	// Capa 15 copia
	this.text_27 = new cjs.Text("Afiliamos el candidato q aprobó satisfactoriamente el proceso a ARL, EPS, AFP y CAJA DE COMPENSACIÓN.", "30px 'Arial'", "#FFFFFF");
	this.text_27.lineHeight = 35;
	this.text_27.lineWidth = 420;
	this.text_27.parent = this;
	this.text_27.setTransform(648,210.4);

	this.instance_4 = new lib.chuloai("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(599.1,261.3,0.48,0.48,0,0,0,97.7,110);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_4},{t:this.text_27}]},192).to({state:[{t:this.instance_4},{t:this.text_27}]},26).to({state:[]},1).wait(131));

	// Capa 15
	this.text_28 = new cjs.Text("La contratación la realiza el departamento de contratación especializado de PACTAMOS ISRAEL SAS.", "30px 'Arial'", "#FFFFFF");
	this.text_28.lineHeight = 35;
	this.text_28.lineWidth = 420;
	this.text_28.parent = this;
	this.text_28.setTransform(120.1,239.9);

	this.instance_5 = new lib.chuloai("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(71.2,290.8,0.48,0.48,0,0,0,97.7,110);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_5},{t:this.text_28}]},188).to({state:[{t:this.instance_5},{t:this.text_28}]},30).to({state:[]},1).wait(131));

	// 04 titulo2
	this.text_29 = new cjs.Text("y Contratación ", "96px 'Impact'", "#FC0000");
	this.text_29.lineHeight = 118;
	this.text_29.lineWidth = 595;
	this.text_29.parent = this;
	this.text_29.setTransform(-615.7,74.6);
	this.text_29._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_29).wait(180).to({_off:false},0).wait(1).to({x:-68.4},0).wait(1).to({x:479},0).wait(1).to({x:497.3},0).wait(1).to({x:515.5},0).wait(1).to({x:533.8},0).wait(1).to({x:552},0).wait(1).to({x:570.3},0).wait(1).to({x:588.6},0).wait(1).to({x:589.8},0).wait(1).to({x:591.1},0).wait(1).to({x:592.3},0).wait(1).to({x:593.6},0).wait(1).to({x:594.9},0).wait(1).to({x:596.1},0).wait(1).to({x:597.4},0).wait(1).to({x:598.7},0).wait(1).to({x:599.9},0).wait(1).to({x:601.2},0).wait(1).to({x:602.5},0).wait(1).to({x:603.7},0).wait(1).to({x:605},0).wait(1).to({x:606.3},0).wait(1).to({x:607.5},0).wait(1).to({x:608.8},0).wait(1).to({x:610.1},0).wait(1).to({x:611.3},0).wait(1).to({x:612.6},0).wait(1).to({x:613.9},0).wait(1).to({x:615.1},0).wait(1).to({x:616.4},0).wait(1).to({x:617.7},0).wait(1).to({x:618.9},0).wait(1).to({x:620.2},0).wait(1).to({x:621.5},0).wait(1).to({x:622.7},0).wait(1).to({x:624},0).wait(2).to({_off:true},1).wait(131));

	// 04 titulo
	this.text_30 = new cjs.Text("Suministro ", "96px 'Impact'", "#FC0000");
	this.text_30.lineHeight = 118;
	this.text_30.lineWidth = 490;
	this.text_30.parent = this;
	this.text_30.setTransform(1392.3,-15);
	this.text_30._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_30).wait(180).to({_off:false},0).wait(1).to({x:1064.1},0).wait(1).to({x:736},0).wait(1).to({x:695.9},0).wait(1).to({x:655.9},0).wait(1).to({x:615.8},0).wait(1).to({x:575.8},0).wait(1).to({x:535.7},0).wait(1).to({x:495.7},0).wait(1).to({x:494},0).wait(1).to({x:492.3},0).wait(1).to({x:490.7},0).wait(1).to({x:489},0).wait(1).to({x:487.3},0).wait(1).to({x:485.6},0).wait(1).to({x:484},0).wait(1).to({x:482.3},0).wait(1).to({x:480.6},0).wait(1).to({x:478.9},0).wait(1).to({x:477.2},0).wait(1).to({x:475.6},0).wait(1).to({x:473.9},0).wait(1).to({x:472.2},0).wait(1).to({x:470.5},0).wait(1).to({x:468.8},0).wait(1).to({x:467.2},0).wait(1).to({x:465.5},0).wait(1).to({x:463.8},0).wait(1).to({x:462.1},0).wait(1).to({x:460.5},0).wait(1).to({x:458.8},0).wait(1).to({x:457.1},0).wait(1).to({x:455.4},0).wait(1).to({x:453.7},0).wait(1).to({x:452.1},0).wait(1).to({x:450.4},0).wait(1).to({x:448.7},0).wait(2).to({_off:true},1).wait(131));

	// 03 titulo copia
	this.text_31 = new cjs.Text("Selección ", "96px 'Impact'", "#7207C4");
	this.text_31.lineHeight = 118;
	this.text_31.lineWidth = 490;
	this.text_31.parent = this;
	this.text_31.setTransform(-492,2);
	this.text_31._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_31).wait(143).to({_off:false},0).wait(1).to({x:-234.2,y:9.4},0).wait(1).to({x:23.7,y:16.8},0).wait(1).to({x:281.6,y:24.1},0).wait(1).to({x:539.5,y:31.5},0).wait(1).to({x:540.7},0).wait(1).to({x:541.9},0).wait(1).to({x:543.1},0).wait(1).to({x:544.4},0).wait(1).to({x:545.6},0).wait(1).to({x:546.8},0).wait(1).to({x:548.1},0).wait(1).to({x:549.3},0).wait(1).to({x:550.5},0).wait(1).to({x:551.8},0).wait(1).to({x:553},0).wait(1).to({x:554.2},0).wait(1).to({x:555.4},0).wait(1).to({x:556.7},0).wait(1).to({x:557.9},0).wait(1).to({x:559.1},0).wait(1).to({x:560.4},0).wait(1).to({x:561.6},0).wait(1).to({x:562.8},0).wait(1).to({x:564.1},0).wait(1).to({x:565.3},0).wait(1).to({x:566.5},0).wait(1).to({x:567.7},0).wait(1).to({x:569},0).wait(1).to({x:570.2},0).wait(1).to({x:571.4},0).wait(1).to({x:572.7},0).wait(1).to({x:573.9},0).wait(1).to({x:575.1},0).wait(1).to({x:576.4},0).wait(2).to({_off:true},1).wait(170));

	// 0308
	this.text_32 = new cjs.Text("Se realizan los exámenes médicos ocupacionales del candidato y se solicita la documentación necesaria para la contratación.", "24px 'Arial'", "#FFFFFF");
	this.text_32.lineHeight = 28;
	this.text_32.lineWidth = 388;
	this.text_32.parent = this;
	this.text_32.setTransform(776,433);
	this.text_32._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_32).wait(162).to({_off:false},0).wait(17).to({_off:true},1).wait(170));

	// 0307
	this.instance_6 = new lib.chuloai("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(741.6,467.4,0.332,0.332,0,0,0,97.7,109.9);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(162).to({_off:false},0).wait(17).to({startPosition:0},0).to({_off:true},1).wait(170));

	// 0306
	this.text_33 = new cjs.Text("Al terminar las pruebas se realiza la verificación de la información soportada en la hoja de vida del candidato para corroborar la veracidad de los datos.", "24px 'Arial'", "#FFFFFF");
	this.text_33.lineHeight = 28;
	this.text_33.lineWidth = 412;
	this.text_33.parent = this;
	this.text_33.setTransform(654.4,238);
	this.text_33._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_33).wait(157).to({_off:false},0).wait(22).to({_off:true},1).wait(170));

	// 0305
	this.instance_7 = new lib.chuloai("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(620,272.4,0.332,0.332,0,0,0,97.7,109.9);
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(157).to({_off:false},0).wait(22).to({startPosition:0},0).to({_off:true},1).wait(170));

	// 0304
	this.text_34 = new cjs.Text("Luego de aplicar las pruebas a través de nuestros profesionales se realiza la ENTREVISTA  FINAL semi - estructurada y se emite un concepto final.", "24px 'Arial'", "#FFFFFF");
	this.text_34.lineHeight = 28;
	this.text_34.lineWidth = 370;
	this.text_34.parent = this;
	this.text_34.setTransform(156.2,420.3);
	this.text_34._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_34).wait(153).to({_off:false},0).wait(26).to({_off:true},1).wait(170));

	// 0303
	this.instance_8 = new lib.chuloai("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(121.8,454.7,0.332,0.332,0,0,0,97.7,109.9);
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(153).to({_off:false},0).wait(26).to({startPosition:0},0).to({_off:true},1).wait(170));

	// 0302
	this.text_35 = new cjs.Text("Es el siguiente proceso donde se APLICAN PRUEBAS para evaluar la compatibilidad entre los candidatos y las vacantes estas son proyectivas y psicotécnicas.", "24px 'Arial'", "#FFFFFF");
	this.text_35.lineHeight = 28;
	this.text_35.lineWidth = 358;
	this.text_35.parent = this;
	this.text_35.setTransform(78.5,238);
	this.text_35._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_35).wait(148).to({_off:false},0).wait(31).to({_off:true},1).wait(170));

	// 0301
	this.instance_9 = new lib.chuloai("synched",0);
	this.instance_9.parent = this;
	this.instance_9.setTransform(44.1,272.4,0.332,0.332,0,0,0,97.7,109.9);
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(148).to({_off:false},0).wait(31).to({startPosition:0},0).to({_off:true},1).wait(170));

	// 0206
	this.text_36 = new cjs.Text("Se realiza una pre-entrevista que no es más que el primer contacto con el candidato para detectar la relación de éste con la vacante y dar a conocer las condiciones laborales.", "24px 'Arial'", "#FFFFFF");
	this.text_36.lineHeight = 28;
	this.text_36.lineWidth = 240;
	this.text_36.parent = this;
	this.text_36.setTransform(864.7,310.2);
	this.text_36._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_36).wait(120).to({_off:false},0).wait(19).to({_off:true},1).wait(210));

	// 0205
	this.text_37 = new cjs.Text("3", "96px 'Impact'", "#FFFFFF");
	this.text_37.lineHeight = 118;
	this.text_37.lineWidth = 51;
	this.text_37.parent = this;
	this.text_37.setTransform(809.8,292.6);
	this.text_37._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_37).wait(120).to({_off:false},0).wait(19).to({_off:true},1).wait(210));

	// 0204
	this.text_38 = new cjs.Text("Realizamos la convocatoria para ubicar las mejores hojas de vida teniendo en cuenta características, exigencias, análisis y descripción de las vacantes.", "24px 'Arial'", "#FFFFFF");
	this.text_38.lineHeight = 28;
	this.text_38.lineWidth = 240;
	this.text_38.parent = this;
	this.text_38.setTransform(479,277.5);
	this.text_38._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_38).wait(117).to({_off:false},0).wait(22).to({_off:true},1).wait(210));

	// 0203
	this.text_39 = new cjs.Text("2", "96px 'Impact'", "#FFFFFF");
	this.text_39.lineHeight = 118;
	this.text_39.lineWidth = 48;
	this.text_39.parent = this;
	this.text_39.setTransform(414.9,263.3);
	this.text_39._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_39).wait(117).to({_off:false},0).wait(22).to({_off:true},1).wait(210));

	// 0202
	this.text_40 = new cjs.Text("Siendo el reclutamiento la parte inicial de nuestro proceso, es aquí donde buscamos el personal a través de herramientas de comunicación efectiva.", "24px 'Arial'", "#FFFFFF");
	this.text_40.lineHeight = 28;
	this.text_40.lineWidth = 240;
	this.text_40.parent = this;
	this.text_40.setTransform(74.5,241.1);
	this.text_40._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_40).wait(113).to({_off:false},0).wait(26).to({_off:true},1).wait(210));

	// 0201
	this.text_41 = new cjs.Text("1", "96px 'Impact'", "#FFFFFF");
	this.text_41.lineHeight = 118;
	this.text_41.lineWidth = 37;
	this.text_41.parent = this;
	this.text_41.setTransform(18.9,223.5);
	this.text_41._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_41).wait(113).to({_off:false},0).wait(26).to({_off:true},1).wait(210));

	// 02 Subtitulo
	this.text_42 = new cjs.Text("Proceso de PRE-SELECCIÓN:", "45px 'Impact'", "#FFFFFF");
	this.text_42.lineHeight = 56;
	this.text_42.lineWidth = 530;
	this.text_42.parent = this;
	this.text_42.setTransform(1230.9,187.7);
	this.text_42._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_42).wait(112).to({_off:false},0).wait(1).to({x:602.5},0).wait(1).to({x:628.9},0).wait(1).to({x:610.9},0).wait(24).to({_off:true},1).wait(210));

	// 02 titulo
	this.text_43 = new cjs.Text("¿Cómo lo hacemos?", "90px 'Impact'", "#CC0000");
	this.text_43.lineHeight = 111;
	this.text_43.lineWidth = 921;
	this.text_43.parent = this;
	this.text_43.setTransform(441,89.5);
	this.text_43._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_43).wait(105).to({_off:false},0).wait(1).to({x:474.1},0).wait(1).to({x:507.2},0).wait(1).to({x:480.2},0).wait(1).to({x:453.3},0).wait(1).to({x:448.1,y:87},0).wait(1).to({x:442.9,y:84.6},0).wait(1).to({x:437.8,y:82.2},0).wait(1).to({x:432.6,y:79.8},0).wait(1).to({x:427.4,y:77.4},0).wait(1).to({x:422.3,y:75},0).wait(1).to({x:417.1,y:72.6},0).wait(1).to({x:411.9,y:70.2},0).wait(1).to({x:406.8,y:67.8},0).wait(1).to({x:401.6,y:65.4},0).wait(1).to({x:396.4,y:63},0).wait(1).to({x:391.3,y:60.6},0).wait(1).to({x:386.1,y:58.2},0).wait(17).to({_off:true},1).wait(210));

	// fiz
	this.izq1 = new lib.flecizq();
	this.izq1.parent = this;
	this.izq1.setTransform(48.6,526.8);
	this.izq1.alpha = 0;
	this.izq1._off = true;
	new cjs.ButtonHelper(this.izq1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.izq1).wait(90).to({_off:false},0).wait(1).to({alpha:0.167},0).wait(1).to({alpha:0.333},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:0.833},0).wait(1).to({alpha:1},0).wait(3).to({_off:true},1).wait(250));

	// fde
	this.der1 = new lib.flecha();
	this.der1.parent = this;
	this.der1.setTransform(1151.4,526.8);
	this.der1.alpha = 0;
	this.der1._off = true;
	new cjs.ButtonHelper(this.der1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.der1).wait(83).to({_off:false},0).wait(1).to({alpha:0.25},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.75},0).wait(1).to({alpha:1},0).wait(2).to({_off:true},1).wait(260));

	// 0116
	this.text_44 = new cjs.Text("Estamos en continuo contacto con el empleador para estar al día con las novedades de nuevos requerimientos y ajustar posibles  inconformidades. ", "30px 'Arial'");
	this.text_44.lineHeight = 35;
	this.text_44.lineWidth = 480;
	this.text_44.parent = this;
	this.text_44.setTransform(1953,424.9);
	this.text_44._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_44).wait(90).to({_off:false},0).wait(1).to({x:1622.1},0).wait(1).to({x:1291.3},0).wait(1).to({x:960.5},0).wait(1).to({x:629.7},0).wait(1).to({x:687.2},0).wait(1).to({x:744.6},0).wait(1).to({x:708.4},0).wait(2).to({_off:true},1).wait(250));

	// 0115
	this.text_45 = new cjs.Text("8", "96px 'Impact'");
	this.text_45.lineHeight = 118;
	this.text_45.lineWidth = 51;
	this.text_45.parent = this;
	this.text_45.setTransform(1885.6,402.8);
	this.text_45._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_45).wait(90).to({_off:false},0).wait(1).to({x:1554.8},0).wait(1).to({x:1224},0).wait(1).to({x:893.2},0).wait(1).to({x:562.4},0).wait(1).to({x:619.8},0).wait(1).to({x:677.3},0).wait(1).to({x:641.1},0).wait(2).to({_off:true},1).wait(250));

	// 0114
	this.text_46 = new cjs.Text("Realizamos seguimiento a los empleados en el área de bienestar social seguridad y salud en el trabajo capacitación y disciplina.", "30px 'Arial'");
	this.text_46.lineHeight = 35;
	this.text_46.lineWidth = 480;
	this.text_46.parent = this;
	this.text_46.setTransform(1374.3,424.9);
	this.text_46._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_46).wait(90).to({_off:false},0).wait(1).to({x:1043.5},0).wait(1).to({x:712.7},0).wait(1).to({x:381.9},0).wait(1).to({x:51.1},0).wait(1).to({x:108.5},0).wait(1).to({x:166},0).wait(1).to({x:153.7},0).wait(2).to({_off:true},1).wait(250));

	// 0113
	this.text_47 = new cjs.Text("7", "96px 'Impact'");
	this.text_47.lineHeight = 118;
	this.text_47.lineWidth = 44;
	this.text_47.parent = this;
	this.text_47.setTransform(1326.5,432.9);
	this.text_47._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_47).wait(90).to({_off:false},0).wait(1).to({x:995.7},0).wait(1).to({x:664.9},0).wait(1).to({x:334.1},0).wait(1).to({x:3.3},0).wait(1).to({x:60.7},0).wait(1).to({x:118.2},0).wait(1).to({x:105.9},0).wait(2).to({_off:true},1).wait(250));

	// 0112
	this.text_48 = new cjs.Text("Manejo y pago de la seguridad social de los empleados generando las novedades por cada empleado.", "30px 'Arial'");
	this.text_48.lineHeight = 35;
	this.text_48.lineWidth = 469;
	this.text_48.parent = this;
	this.text_48.setTransform(1941,261.2);
	this.text_48._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_48).wait(90).to({_off:false},0).wait(1).to({x:1610.1},0).wait(1).to({x:1279.3},0).wait(1).to({x:948.5},0).wait(1).to({x:617.7},0).wait(1).to({x:675.2},0).wait(1).to({x:732.6},0).wait(1).to({x:696.4},0).wait(2).to({_off:true},1).wait(250));

	// 0111
	this.text_49 = new cjs.Text("6", "96px 'Impact'");
	this.text_49.lineHeight = 118;
	this.text_49.lineWidth = 52;
	this.text_49.parent = this;
	this.text_49.setTransform(1872.2,261.2);
	this.text_49._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_49).wait(90).to({_off:false},0).wait(1).to({x:1541.4},0).wait(1).to({x:1210.6},0).wait(1).to({x:879.8},0).wait(1).to({x:549},0).wait(1).to({x:606.4},0).wait(1).to({x:663.9},0).wait(1).to({x:627.7},0).wait(2).to({_off:true},1).wait(250));

	// 0110
	this.text_50 = new cjs.Text("Manejo pago y liquidación de la nómina de los empleados con exactitud en las novedades del mes o la quincena.", "30px 'Arial'");
	this.text_50.lineHeight = 35;
	this.text_50.lineWidth = 469;
	this.text_50.parent = this;
	this.text_50.setTransform(1350.4,261.2);
	this.text_50._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_50).wait(90).to({_off:false},0).wait(1).to({x:1019.6},0).wait(1).to({x:688.8},0).wait(1).to({x:358},0).wait(1).to({x:27.2},0).wait(1).to({x:84.6},0).wait(1).to({x:142.1},0).wait(1).to({x:105.9},0).wait(2).to({_off:true},1).wait(250));

	// 0109
	this.text_51 = new cjs.Text("5", "96px 'Impact'");
	this.text_51.lineHeight = 118;
	this.text_51.lineWidth = 52;
	this.text_51.parent = this;
	this.text_51.setTransform(1277.9,261.2);
	this.text_51._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_51).wait(90).to({_off:false},0).wait(1).to({x:947.1},0).wait(1).to({x:616.3},0).wait(1).to({x:285.5},0).wait(1).to({x:-45.3},0).wait(1).to({x:12.1},0).wait(1).to({x:69.6},0).wait(1).to({x:33.4},0).wait(2).to({_off:true},1).wait(250));

	// 0108
	this.text_52 = new cjs.Text("Brindamos el proceso de contratación con todos los estándares establecidos dentro del marco jurídico laboral.", "30px 'Arial'");
	this.text_52.lineHeight = 35;
	this.text_52.lineWidth = 462;
	this.text_52.parent = this;
	this.text_52.setTransform(-536.1,421.4);
	this.text_52._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_52).wait(84).to({_off:false},0).wait(1).to({x:94.7},0).wait(1).to({x:725.4},0).wait(1).to({x:685},0).wait(2).to({_off:true},1).wait(260));

	// 0107
	this.text_53 = new cjs.Text("4", "96px 'Impact'");
	this.text_53.lineHeight = 118;
	this.text_53.lineWidth = 49;
	this.text_53.parent = this;
	this.text_53.setTransform(-600.5,421.4);
	this.text_53._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_53).wait(84).to({_off:false},0).wait(1).to({x:30.3},0).wait(1).to({x:661},0).wait(1).to({x:620.6},0).wait(2).to({_off:true},1).wait(260));

	// 0106
	this.text_54 = new cjs.Text("Realizamos pruebas de conocimiento y actitud de las personas perfiladas para cada uno de los cargos.", "30px 'Arial'");
	this.text_54.lineHeight = 35;
	this.text_54.lineWidth = 599;
	this.text_54.parent = this;
	this.text_54.setTransform(-648.7,274.8);
	this.text_54._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_54).wait(84).to({_off:false},0).wait(1).to({x:-17.9},0).wait(1).to({x:612.8},0).wait(1).to({x:572.4},0).wait(2).to({_off:true},1).wait(260));

	// 0105
	this.text_55 = new cjs.Text("3", "96px 'Impact'");
	this.text_55.lineHeight = 118;
	this.text_55.lineWidth = 51;
	this.text_55.parent = this;
	this.text_55.setTransform(-1219,407.8);
	this.text_55._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_55).wait(84).to({_off:false},0).wait(1).to({x:-588.3},0).wait(1).to({x:42.5},0).wait(1).to({x:2},0).wait(2).to({_off:true},1).wait(260));

	// 0104
	this.text_56 = new cjs.Text("Ofrecemos seguridad al empleador cumpliendo con  exámenes médicos ocupacionales del personal seleccionado.", "30px 'Arial'");
	this.text_56.lineHeight = 35;
	this.text_56.lineWidth = 467;
	this.text_56.parent = this;
	this.text_56.setTransform(-1164.1,421.4);
	this.text_56._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_56).wait(84).to({_off:false},0).wait(1).to({x:-533.4},0).wait(1).to({x:97.4},0).wait(1).to({x:56.9},0).wait(2).to({_off:true},1).wait(260));

	// 0103
	this.text_57 = new cjs.Text("2", "96px 'Impact'");
	this.text_57.lineHeight = 118;
	this.text_57.lineWidth = 48;
	this.text_57.parent = this;
	this.text_57.setTransform(-700.9,251.6);
	this.text_57._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_57).wait(84).to({_off:false},0).wait(1).to({x:-70.1},0).wait(1).to({x:560.6},0).wait(1).to({x:520.2},0).wait(2).to({_off:true},1).wait(260));

	// 0102
	this.text_58 = new cjs.Text("Búsqueda de personal idóneo para laborar en su empresa.", "30px 'Arial'");
	this.text_58.lineHeight = 35;
	this.text_58.lineWidth = 416;
	this.text_58.parent = this;
	this.text_58.setTransform(-1147.4,284.3);
	this.text_58._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_58).wait(84).to({_off:false},0).wait(1).to({x:-516.7},0).wait(1).to({x:114.1},0).wait(1).to({x:73.6},0).wait(2).to({_off:true},1).wait(260));

	// 0101
	this.text_59 = new cjs.Text("1", "96px 'Impact'");
	this.text_59.lineHeight = 118;
	this.text_59.lineWidth = 44;
	this.text_59.parent = this;
	this.text_59.setTransform(-1195.2,261.2);
	this.text_59._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_59).wait(84).to({_off:false},0).wait(1).to({x:-564.5},0).wait(1).to({x:66.3},0).wait(1).to({x:25.8},0).wait(2).to({_off:true},1).wait(260));

	// 01 subtitulo
	this.text_60 = new cjs.Text("Brindamos apoyo y solución a las empresas en las siguientes áreas:", "36px 'Impact'");
	this.text_60.textAlign = "center";
	this.text_60.lineHeight = 45;
	this.text_60.lineWidth = 1048;
	this.text_60.parent = this;
	this.text_60.setTransform(1726,210.4);
	this.text_60._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text_60).wait(83).to({_off:false},0).wait(1).to({x:1164.7},0).wait(1).to({x:603.4},0).wait(1).to({x:641.6},0).wait(1).to({x:629.1},0).wait(1).to({x:629.6},0).wait(1).to({x:630.1},0).wait(1).to({x:630.6},0).wait(1).to({x:631.1},0).wait(1).to({x:631.7},0).wait(1).to({x:632.2},0).wait(1).to({x:632.7},0).wait(1).to({x:633.2},0).wait(1).to({x:633.7},0).wait(1).to({x:634.3},0).wait(1).to({x:634.8},0).wait(1).to({x:635.3},0).wait(1).to({x:1188.8},0).wait(1).to({x:1742.2},0).wait(1).to({_off:true},1).wait(247));

	// 01 titulo
	this.titulohacemos = new cjs.Text("¿Qué Hacemos?", "40px 'Impact'", "#ECA100");
	this.titulohacemos.name = "titulohacemos";
	this.titulohacemos.textAlign = "center";
	this.titulohacemos.lineHeight = 51;
	this.titulohacemos.lineWidth = 278;
	this.titulohacemos.parent = this;
	this.titulohacemos.setTransform(1477.1,93.7,1.971,1.969);
	this.titulohacemos._off = true;

	this.timeline.addTween(cjs.Tween.get(this.titulohacemos).wait(79).to({_off:false},0).wait(1).to({x:1351.3},0).wait(1).to({x:1225.5},0).wait(1).to({x:1099.8},0).wait(1).to({x:974},0).wait(1).to({x:848.2},0).wait(1).to({x:722.4},0).wait(1).to({x:760.4},0).wait(1).to({x:798.3},0).wait(1).to({x:776.2},0).wait(1).to({x:774.8},0).wait(1).to({x:773.4},0).wait(1).to({x:772},0).wait(1).to({x:770.6},0).wait(1).to({x:769.1},0).wait(1).to({x:767.7},0).wait(1).to({x:766.3},0).wait(1).to({x:764.9},0).wait(1).to({x:763.4},0).wait(1).to({x:762},0).wait(1).to({x:760.6},0).wait(1).to({x:1127.1},0).wait(1).to({x:1493.6},0).wait(1).to({_off:true},1).wait(247));

	// tb6
	this.azul1 = new lib.tb6();
	this.azul1.parent = this;
	this.azul1.setTransform(1115.4,652.4,1,1,0,0,0,15.1,18.4);
	this.azul1.alpha = 0;
	this.azul1._off = true;
	new cjs.ButtonHelper(this.azul1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.azul1).wait(70).to({_off:false},0).wait(1).to({regX:0,regY:-0.2,x:1100.3,y:633.8,alpha:0.333},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:1},0).wait(277));

	// b6
	this.azul2 = new lib.b6beneficios();
	this.azul2.parent = this;
	this.azul2.setTransform(1099.9,663.9,1,0.127,0,0,0,-56.1,9.5);
	this.azul2._off = true;
	new cjs.ButtonHelper(this.azul2, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.azul2).wait(67).to({_off:false},0).wait(1).to({regY:-13.4,scaleY:0.49,y:652.7},0).wait(1).to({scaleY:0.85,y:644.4},0).wait(1).to({scaleY:1.21,y:636.1},0).wait(1).to({scaleY:1,y:640.9},0).wait(1).to({scaleY:1.28,y:634.6},0).wait(278));

	// tb5
	this.cafe2 = new lib.tb5();
	this.cafe2.parent = this;
	this.cafe2.setTransform(899.7,641.7,1,1,0,0,0,0,6.9);
	this.cafe2.alpha = 0;
	this.cafe2._off = true;
	new cjs.ButtonHelper(this.cafe2, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.cafe2).wait(65).to({_off:false},0).wait(1).to({regY:10.6,y:645.4,alpha:0.333},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:1},0).wait(282));

	// b5
	this.cafe1 = new lib._5nomina();
	this.cafe1.parent = this;
	this.cafe1.setTransform(900,663.4,1,0.127,0,0,0,-56,9.5);
	this.cafe1._off = true;
	new cjs.ButtonHelper(this.cafe1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.cafe1).wait(62).to({_off:false},0).wait(1).to({regX:-56.1,regY:-13.4,scaleY:0.49,x:899.9,y:652.2},0).wait(1).to({scaleY:0.85,y:643.9},0).wait(1).to({scaleY:1.21,y:635.6},0).wait(1).to({scaleY:1,y:640.4},0).wait(1).to({scaleY:1.28,y:634.1},0).wait(17).to({y:634},0).wait(266));

	// tb4
	this.naranja1 = new lib.tb4();
	this.naranja1.parent = this;
	this.naranja1.setTransform(700.2,634.7,1,1,0,0,0,0,-0.1);
	this.naranja1.alpha = 0;
	this.naranja1._off = true;
	new cjs.ButtonHelper(this.naranja1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.naranja1).wait(62).to({_off:false},0).wait(1).to({regY:2.8,y:637.6,alpha:0.333},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:1},0).wait(285));

	// b4
	this.naranja2 = new lib._4suministro();
	this.naranja2.parent = this;
	this.naranja2.setTransform(700,662.7,1,0.127,0,0,0,-56.1,9.5);
	this.naranja2._off = true;
	new cjs.ButtonHelper(this.naranja2, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.naranja2).wait(57).to({_off:false},0).wait(1).to({regY:-13.4,scaleY:0.49,y:651.5},0).wait(1).to({scaleY:0.85,y:643.2},0).wait(1).to({scaleY:1.21,y:634.9},0).wait(1).to({scaleY:1,y:639.7},0).wait(1).to({scaleY:1.28,y:633.4},0).wait(288));

	// tb3
	this.morado1 = new lib.tb3();
	this.morado1.parent = this;
	this.morado1.setTransform(500.3,634.7,1,1,0,0,0,0,-0.1);
	this.morado1.alpha = 0;
	this.morado1._off = true;
	new cjs.ButtonHelper(this.morado1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.morado1).wait(57).to({_off:false},0).wait(1).to({regY:-1,y:633.8,alpha:0.333},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:1},0).wait(290));

	// b3
	this.morado2 = new lib._3seleccion();
	this.morado2.parent = this;
	this.morado2.setTransform(500,663.3,1,0.127,0,0,0,-56.1,9.5);
	this.morado2._off = true;
	new cjs.ButtonHelper(this.morado2, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.morado2).wait(52).to({_off:false},0).wait(1).to({regY:-13.4,scaleY:0.49,y:652.1},0).wait(1).to({scaleY:0.85,y:643.8},0).wait(1).to({scaleY:1.21,y:635.5},0).wait(1).to({scaleY:1,y:640.3},0).wait(1).to({scaleY:1.28,y:634},0).wait(293));

	// tb2
	this.boton2 = new lib.tb2();
	this.boton2.parent = this;
	this.boton2.setTransform(300.3,634.8);
	this.boton2.alpha = 0;
	this.boton2._off = true;
	new cjs.ButtonHelper(this.boton2, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.boton2).wait(50).to({_off:false},0).wait(1).to({regY:4.2,y:639,alpha:0.333},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:1},0).wait(297));

	// b2
	this.botonrojo = new lib._2como();
	this.botonrojo.parent = this;
	this.botonrojo.setTransform(300,663.3,1,0.127,0,0,0,-56.1,9.5);
	this.botonrojo._off = true;
	new cjs.ButtonHelper(this.botonrojo, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.botonrojo).wait(47).to({_off:false},0).wait(1).to({regY:-13.4,scaleY:0.49,y:652.1},0).wait(1).to({scaleY:0.85,y:643.8},0).wait(1).to({scaleY:1.21,y:635.5},0).wait(1).to({scaleY:1,y:640.3},0).wait(1).to({scaleY:1.28,y:634},0).wait(298));

	// tb1
	this.quehacemos2 = new lib.tb1();
	this.quehacemos2.parent = this;
	this.quehacemos2.setTransform(100.3,634.8);
	this.quehacemos2.alpha = 0;
	this.quehacemos2._off = true;
	new cjs.ButtonHelper(this.quehacemos2, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.quehacemos2).wait(44).to({_off:false},0).wait(1).to({regY:5.5,y:639.4,alpha:0.333},0).wait(1).to({y:638.5,alpha:0.667},0).wait(1).to({y:637.6,alpha:1},0).wait(1).to({y:636.7},0).wait(1).to({y:635.8},0).wait(1).to({y:634.9},0).wait(1).to({y:634},0).wait(1).to({y:633.1},0).wait(298));

	// b1
	this.quehacemos1 = new lib._1hacemos();
	this.quehacemos1.parent = this;
	this.quehacemos1.setTransform(100,664.1,1,0.127,0,0,0,-56.1,9.5);
	this.quehacemos1._off = true;
	new cjs.ButtonHelper(this.quehacemos1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.quehacemos1).wait(41).to({_off:false},0).wait(1).to({regY:-13.4,scaleY:0.49,y:652.9},0).wait(1).to({scaleY:0.85,y:644.6},0).wait(1).to({scaleY:1.21,y:636.3},0).wait(1).to({scaleY:1,y:641.1},0).wait(1).to({scaleY:1.28,y:634.8},0).wait(304));

	// fondo6
	this.instance_10 = new lib._06fondo();
	this.instance_10.parent = this;
	this.instance_10.setTransform(729.8,635.9,1,1,0,0,0,-604,-272.4);
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(301).to({_off:false},0).wait(1).to({regX:0,regY:0,rotation:-30,x:1462.2,y:570.9},0).wait(1).to({rotation:-60,x:1414,y:251.2},0).wait(1).to({rotation:-75,x:1368.9,y:126.5},0).wait(1).to({rotation:-90,x:1295.3,y:36.6},0).wait(1).to({rotation:-140.7,x:800.3,y:48.3},0).wait(1).to({rotation:-180.4,x:562.7,y:374.5},0).wait(1).to({x:635.8,y:375.6},0).wait(1).to({x:601.5},0).wait(41));

	// fondo5
	this.instance_11 = new lib._05fondo();
	this.instance_11.parent = this;
	this.instance_11.setTransform(-37,-148.2,1.067,1,0,0,0,-591.8,0);
	this.instance_11.alpha = 0;
	this.instance_11._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(219).to({_off:false},0).wait(1).to({regX:0,x:594.3,y:-65.7,alpha:0.058},0).wait(1).to({y:16.9,alpha:0.115},0).wait(1).to({y:99.4,alpha:0.173},0).wait(1).to({y:181.9,alpha:0.23},0).wait(1).to({y:264.5,alpha:0.288},0).wait(1).to({y:347,alpha:0.345},0).wait(1).to({y:429.4,alpha:0.403},0).wait(1).to({y:512.1,alpha:0.46},0).wait(1).to({y:494.9,alpha:1},0).wait(1).to({y:477.8,alpha:0.67},0).wait(1).to({y:460.6,alpha:0.34},0).wait(1).to({y:443.5,alpha:0.67},0).wait(1).to({y:426.3,alpha:1},0).wait(28).to({_off:true},1).wait(89));

	// fondo4
	this.instance_12 = new lib._04fondo();
	this.instance_12.parent = this;
	this.instance_12.setTransform(1209.1,174.8,1.024,1,180,0,0,599.5,-272.9);
	this.instance_12._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(180).to({_off:false},0).wait(1).to({regX:0,regY:0,rotation:157.9,x:1674.7,y:-309.2},0).wait(1).to({rotation:135.7,x:1458.2,y:-448.9},0).wait(1).to({rotation:113.6,x:1205,y:-496.8},0).wait(1).to({rotation:91.5,x:952.4,y:-445.8},0).wait(1).to({rotation:69.4,x:737.6,y:-303.4},0).wait(1).to({rotation:47.2,x:592.3,y:-90.5},0).wait(1).to({rotation:25.1,x:537.8,y:161.4},0).wait(1).to({rotation:3,x:582.2,y:415.2},0).wait(1).to({rotation:4.5,x:576.1,y:398.6},0).wait(1).to({rotation:6,x:570.4,y:381.9},0).wait(1).to({rotation:0.3,x:594.3,y:444.6},0).wait(1).to({rotation:0.3},0).wait(26).to({_off:true},1).wait(131));

	// fondo3
	this.instance_13 = new lib._03fondo();
	this.instance_13.parent = this;
	this.instance_13.setTransform(-19.1,961.8,1.025,1,0,0,0,-599.8,0);
	this.instance_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(141).to({_off:false},0).wait(1).to({regX:0,x:595.8,y:880.4},0).wait(1).to({y:798.9},0).wait(1).to({y:717.5},0).wait(1).to({x:595.9,y:636.1},0).wait(1).to({y:554.6},0).wait(1).to({y:473.2},0).wait(1).to({y:391.8},0).wait(1).to({x:596,y:429.1},0).wait(1).to({x:596.1,y:466.5},0).wait(1).to({y:447.6},0).wait(28).to({_off:true},1).wait(170));

	// fondo2
	this.instance_14 = new lib._02fondo();
	this.instance_14.parent = this;
	this.instance_14.setTransform(-18.2,720.4,1.029,1,-90,0,0,-599.6,272.9);
	this.instance_14._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(101).to({_off:false},0).wait(1).to({regX:0,regY:0,rotation:-74.8,x:-120.3,y:53.2},0).wait(1).to({rotation:-59.7,x:57.7,y:49.8},0).wait(1).to({rotation:-44.5,x:230.4,y:93},0).wait(1).to({rotation:-29.4,x:385.7,y:179.8},0).wait(1).to({rotation:-14.2,x:513,y:304.2},0).wait(1).to({rotation:0.9,x:603.4,y:457.6},0).wait(1).to({rotation:-0.6,x:596.1,y:441},0).wait(1).to({rotation:-2.1,x:588.4,y:424.7},0).wait(1).to({rotation:-1.3,x:592.8,y:433.9},0).wait(1).to({rotation:-0.4,x:597.1,y:443.2},0).wait(28).to({_off:true},1).wait(210));

	// fondo1
	this.movieClip_4 = new lib._01fondo1();
	this.movieClip_4.parent = this;
	this.movieClip_4.setTransform(-19,447.6,0.074,1,0,0,180,-569.8,0);
	this.movieClip_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.movieClip_4).wait(79).to({_off:false},0).wait(1).to({regX:0,scaleX:0.15,skewY:0,x:67.9},0).wait(1).to({scaleX:0.38,x:197},0).wait(1).to({scaleX:0.61,x:326.1},0).wait(1).to({scaleX:0.83,x:455.2},0).wait(1).to({scaleX:1.06,x:584.3},0).wait(1).to({x:584.2},0).wait(1).to({scaleX:1.06,x:584},0).wait(1).to({x:583.9},0).wait(1).to({x:583.8},0).wait(1).to({x:583.7},0).wait(1).to({x:583.6},0).wait(1).to({scaleX:1.06,x:583.4},0).wait(1).to({x:583.3},0).wait(1).to({x:583.2},0).wait(1).to({x:583.1},0).wait(1).to({x:583},0).wait(1).to({scaleX:1.06,x:582.8},0).wait(1).to({x:582.7},0).wait(1).to({x:582.6},0).wait(1).to({x:582.5},0).wait(1).to({scaleX:1.06,x:582.4},0).wait(1).to({scaleX:0.53,x:283.2},0).wait(1).to({scaleX:0.01,x:-16},0).wait(51).to({_off:true},1).wait(196));

	// logo
	this.instance_15 = new lib.logopactamos_1();
	this.instance_15.parent = this;
	this.instance_15.setTransform(597.1,328.5,0.01,0.01,0,0,0,180.1,195.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_15).wait(1).to({regX:200,regY:200,scaleX:0,scaleY:0,x:-596.2,y:-328.4},0).wait(1).to({x:-595.4},0).wait(1).to({x:-594.7},0).wait(1).to({x:-593.9},0).wait(1).to({x:-593.1},0).wait(1).to({scaleX:0.4,scaleY:0.4,x:600.3,y:330.4},0).wait(1).to({scaleX:0.8,scaleY:0.8,x:607.5,y:332.4},0).wait(1).to({scaleX:1.2,scaleY:1.2,x:614.7,y:334.3},0).wait(1).to({scaleX:1.05,scaleY:1.05,x:610.9,y:333.6},0).wait(1).to({scaleX:0.9,scaleY:0.9,x:607.2,y:332.9},0).wait(1).to({scaleX:0.95,scaleY:0.95,x:605.1,y:333.1},0).wait(1).to({scaleX:1,scaleY:1,x:603,y:333.3},0).wait(1).to({x:603.3},0).wait(1).to({x:603.5},0).wait(1).to({x:603.8},0).wait(1).to({x:604.1},0).wait(1).to({x:604.4},0).wait(1).to({x:604.7},0).wait(1).to({x:604.9},0).wait(1).to({x:605.2},0).wait(1).to({x:605.5},0).wait(1).to({x:605.8},0).wait(1).to({x:606.1},0).wait(1).to({x:606.3},0).wait(1).to({x:606.6},0).wait(1).to({x:606.9},0).wait(1).to({x:607.2},0).wait(1).to({x:607.5},0).wait(1).to({x:607.7},0).wait(1).to({x:608},0).wait(1).to({x:608.3},0).wait(1).to({x:608.6},0).wait(1).to({x:608.9},0).wait(1).to({x:609.1},0).wait(1).to({x:609.4},0).wait(1).to({x:609.7},0).wait(1).to({x:610},0).wait(1).to({x:610.3},0).wait(1).to({x:610.5},0).wait(1).to({x:610.8},0).wait(1).to({x:611.1},0).wait(1).to({scaleX:0.73,scaleY:0.73,x:606.4,y:332},0).wait(1).to({scaleX:0.45,scaleY:0.45,x:601.6,y:330.7},0).wait(1).to({scaleX:0.53,scaleY:0.53,x:603.8,y:331},0).wait(1).to({scaleX:0.6,scaleY:0.6,x:606.1,y:331.4},0).wait(1).to({scaleX:0.55,scaleY:0.55,x:605.8,y:331.1},0).wait(1).to({scaleX:0.5,scaleY:0.5,x:605.5,y:330.9},0).wait(1).to({x:606.3},0).wait(1).to({x:607},0).wait(1).to({x:706.4,y:356.3},0).wait(1).to({x:805.9,y:381.7},0).wait(1).to({x:905.3,y:407.1},0).wait(1).to({x:1004.7,y:432.5},0).wait(1).to({x:1010,y:450.5},0).wait(1).to({x:1015.2,y:468.4},0).wait(1).to({x:1030.3,y:441.9},0).wait(1).to({x:1045.4,y:415.5},0).wait(1).to({x:1044.1,y:418.7},0).wait(1).to({x:1042.8,y:421.8},0).wait(39).to({alpha:0.667},0).wait(1).to({alpha:0.333},0).wait(1).to({alpha:0},0).wait(40).to({_off:true},1).wait(209));

	// texto
	this.instance_16 = new lib.Símbolo1();
	this.instance_16.parent = this;
	this.instance_16.setTransform(596.9,506.5,0.01,0.01,0,0,0,595.4,150.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_16).wait(1).to({regX:600,regY:159.7,scaleX:0,scaleY:0,x:-596.9,y:-506.5},0).wait(7).to({scaleX:0.1,scaleY:0.12,x:597.3,y:503.5},0).wait(1).to({scaleX:0.37,scaleY:0.44,x:598.3,y:495.2},0).wait(1).to({scaleX:0.65,scaleY:0.76,x:599.4,y:486.9},0).wait(1).to({scaleX:0.92,scaleY:1.08,x:600.4,y:478.6},0).wait(1).to({scaleX:1.03,scaleY:1.21,x:600.8,y:474.4},0).wait(1).to({scaleX:0.99,scaleY:1.16,x:600.6,y:473.9},0).wait(1).to({scaleX:0.98,scaleY:1.15,x:600.5,y:473.8},0).wait(1).to({scaleX:1,scaleY:1.17,x:600.6,y:473.9},0).wait(1).to({scaleX:1,scaleY:1.17,y:474},0).wait(1).to({scaleX:1},0).wait(1).to({scaleY:1.18},0).wait(1).to({scaleX:1},0).wait(1).to({scaleY:1.18,x:600.7},0).wait(2).to({scaleX:1,scaleY:1.18,y:474.1},0).wait(1).to({y:474},0).wait(1).to({scaleX:1,scaleY:1.18,y:474.1},0).wait(2).to({scaleX:1,scaleY:1.18},0).wait(2).to({scaleX:1,scaleY:1.18},0).wait(1).to({scaleY:1.18},0).wait(1).to({scaleX:1.01},0).wait(1).to({scaleY:1.18},0).wait(2).to({scaleX:1.01,scaleY:1.18},0).wait(2).to({scaleX:1.01,scaleY:1.18},0).wait(2).to({scaleX:1.01,scaleY:1.19},0).wait(2).to({scaleX:1.01,scaleY:1.19},0).wait(2).to({scaleX:1.01,scaleY:1.19},0).wait(1).to({scaleY:1.19,y:474.2},0).wait(2).to({scaleX:0.89,scaleY:1.05,x:594.8,y:472.8},0).wait(1).to({scaleX:0.65,scaleY:0.76,x:583,y:470},0).wait(1).to({scaleX:0.53,scaleY:0.63,x:571.9,y:468.7},0).wait(1).to({x:619.1,y:475.8},0).wait(1).to({x:713.3,y:488.5},0).wait(1).to({x:807.5,y:501.2},0).wait(1).to({x:901.6,y:513.9},0).wait(1).to({x:995.6,y:526.6},0).wait(1).to({x:997.9,y:522.5},0).wait(1).to({x:945.4,y:508.3},0).wait(1).to({y:503.4},0).wait(1).to({x:973.6},0).wait(1).to({x:1001.8},0).wait(1).to({x:1029.9},0).wait(1).to({x:1038.6,y:503.3},0).wait(38).to({x:1119.9},0).wait(1).to({x:1277},0).wait(1).to({x:1434},0).wait(1).to({x:1519},0).wait(41).to({_off:true},1).wait(209));

	// edificios
	this.instance_17 = new lib.EDIFICIO();
	this.instance_17.parent = this;
	this.instance_17.setTransform(0,960.5,1.137,0.003,0,0,0,0,319.7);
	this.instance_17._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_17).wait(48).to({_off:false},0).wait(1).to({regX:246.8,regY:158.6,scaleY:0.24,x:280.5,y:846.8},0).wait(1).to({scaleY:0.48,y:733.6},0).wait(1).to({scaleY:0.72,y:620.4},0).wait(1).to({scaleY:0.96,y:507.3},0).wait(1).to({scaleY:1.19,y:394.1},0).wait(1).to({scaleY:1.1,y:409.3},0).wait(1).to({scaleY:1.18,y:396.4},0).wait(23).to({y:396.2},0).wait(1).to({y:396},0).wait(1).to({y:395.8},0).wait(1).to({alpha:0},0).wait(269));

	// mudnosg
	this.instance_18 = new lib.MUNDOCLARO();
	this.instance_18.parent = this;
	this.instance_18.setTransform(1063.1,87.2,0.714,0.714,0,0,0,171.3,82.8);
	this.instance_18.alpha = 0;
	this.instance_18._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_18).wait(48).to({_off:false},0).wait(1).to({y:87.1,alpha:0.111},0).wait(1).to({alpha:0.222},0).wait(1).to({alpha:0.333},0).wait(1).to({alpha:0.444},0).wait(1).to({alpha:0.556},0).wait(1).to({alpha:0.667},0).wait(1).to({alpha:0.778},0).wait(1).to({alpha:0.889},0).wait(1).to({alpha:1},0).wait(21).to({alpha:0.966},0).wait(1).to({alpha:0.932},0).wait(1).to({alpha:0.898},0).wait(1).to({alpha:0.864},0).wait(1).to({alpha:0.83},0).wait(1).to({alpha:0.796},0).wait(1).to({alpha:0.762},0).wait(1).to({alpha:0.728},0).wait(1).to({alpha:0.694},0).wait(1).to({alpha:0.66},0).wait(1).to({alpha:0.626},0).wait(1).to({alpha:0.592},0).wait(1).to({alpha:0.558},0).wait(1).to({alpha:0.524},0).wait(1).to({alpha:0.49},0).wait(258));

	// mundosb
	this.instance_19 = new lib.MUNDO();
	this.instance_19.parent = this;
	this.instance_19.setTransform(349.7,110.9,1,1,0,0,0,171.3,82.8);
	this.instance_19._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_19).wait(48).to({_off:false},0).wait(40).to({alpha:0.9},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.5},0).wait(258));

	// blanco
	this.instance_20 = new lib.Símbolo2();
	this.instance_20.parent = this;
	this.instance_20.setTransform(0,3.9,1,1,0,0,0,0,711.8);
	this.instance_20._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_20).wait(48).to({_off:false},0).wait(1).to({regX:136.8,regY:355.9,rotation:15.2,x:225.3,y:-303.7},0).wait(1).to({rotation:30.4,x:298.1,y:-233.8},0).wait(1).to({rotation:45.6,x:350,y:-147.4},0).wait(1).to({rotation:60.8,x:377.4,y:-50.3},0).wait(1).to({rotation:76,x:378.4,y:50.6},0).wait(1).to({rotation:91.2,x:353,y:148.1},0).wait(1).to({rotation:89.8,x:356.4,y:139.2},0).wait(1).to({rotation:88.3,x:359.7,y:130.3},0).wait(1).to({rotation:90.2,x:355.5,y:141.6},0).wait(21).to({scaleX:1.21,scaleY:1.38,rotation:0,skewX:90.3,skewY:103,x:454.4,y:167.7},0).wait(1).to({scaleX:1.43,scaleY:1.76,skewX:90.4,skewY:115.9,x:542.5,y:183.2},0).wait(1).to({scaleX:1.64,scaleY:2.15,skewX:90.5,skewY:128.8,x:623.3,y:184.6},0).wait(1).to({scaleX:1.85,scaleY:2.53,skewX:90.6,skewY:141.7,x:701,y:169.7},0).wait(269));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(1191,658.5,12,181.7);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;