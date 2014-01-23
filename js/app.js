pageID = 'home';

var site = function(){
	
	var $window = $(window),
	
		presentation = function(){
			var h_window = 0,s_window = 0, //height and scroll window
				$pres = $('#presentation'),
				h_press = 0,
				h_pres_paddingBottom = 20,
				$presCont = $('#presentation-container'),
				h_presCont = $presCont.height(), //height of presentation
				top_presCont = parseInt($presCont.css('top')),
				scroll_fix_presCont = 0,
				scroll_fix_presCont_max = 0,
				fix_presCont = false,
				
				stepAnimation = 114,
				stepsLength = 12,
			
			
			
				init = function(){
					h_window = $window.height();
					var fixTop = .5*(h_window - h_presCont)
					scroll_fix_presCont = top_presCont - fixTop;
					h_press = scroll_fix_presCont + stepAnimation * stepsLength;
					scroll_fix_presCont_max = h_press - (fixTop +h_presCont+h_pres_paddingBottom);
					console.log(scroll_fix_presCont_max);
					$pres.height(h_press);
					draw();
				},
				
				draw = function(){
					s_window = $window.scrollTop();
					if(!fix_presCont && s_window > scroll_fix_presCont && s_window < scroll_fix_presCont_max){
						$presCont.removeClass('bottom').addClass('fixed');
						fix_presCont = true;
						console.log('fixed');
					}
					if(fix_presCont && (s_window <= scroll_fix_presCont || s_window >= scroll_fix_presCont_max)){
						$presCont.removeClass('bottom').removeClass('fixed');
						fix_presCont = false;
						console.log('non-fixed');						
					}
					if(s_window >= scroll_fix_presCont_max){
						$presCont.addClass('bottom');
						console.log('bajo');
					}
				}
				
				init();
				$window.resize(init).scroll(draw);
		},
		header = function(){
			var $header = $('header.main'),
				floating = false,
				showing = false,
				s_window = 0,
				s_window_prev = 0;
				s_window_min = 80,
				draw = function(){
					s_window = $window.scrollTop();
					if(!floating && s_window > s_window_min){
						$header.addClass('floating');
						floating = true;
					}
					if(floating && s_window <= s_window_min){
						$header.removeClass('floating').removeClass('showing');
						s_window_min = 80;
						floating = false;
					}
					
					if(!showing && s_window < s_window_prev){
						$header.addClass('showing');
						s_window_min = 0;
						showing = true;
					}
					if(showing && s_window > s_window_prev){
						$header.removeClass('showing');
						s_window_min = 80;
						showing = false;
					}
					s_window_prev = s_window;
				}
				
			draw();	
			$window.scroll(draw);
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	;
	// Execution
	header();
	switch(pageID){
		case 'home':
			presentation();
			break;
		default:
			break;
	}
}
$('document').ready(site);
