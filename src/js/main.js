"use strict";

var jQuery = require("jquery");
var myModule = require("./aModule");

jQuery(function() {

	// Code stuff!
	console.log("4+5 =", myModule.add(4, 5));
	console.log("4*5 =", myModule.multiply(4, 5));

});
