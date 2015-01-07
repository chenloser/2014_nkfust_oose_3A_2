var timer = null;
	var leftP = -258;
	function stopTimer() {
		clearTimeout(timer);
	}
	function trigger_open() {
		stopTimer();
		if(leftP < 0) {
			leftP+= 6;
			document.getElementById("left").style.left = leftP;
			timer = setTimeout("trigger_open()",2);
		}
		if(leftP >= 0) {
			stopTimer();
		}
	}
	function trigger_close() {
		stopTimer();
		if(leftP > -258) {
			leftP-= 6;
			document.getElementById("left").style.left = leftP;
			timer = setTimeout("trigger_close()",2);
		}
		if(leftP <= -258) {
			stopTimer();
		}
	}

	var topH = 25;
	var MIN_TOPH = 25;
	var MAX_TOPH = 120;
	var timerB = null;
	function stopTimerB() {
		clearTimeout(timerB);
	}
	function trigger_top_open() {
		stopTimerB();
		if(topH < MAX_TOPH) {
			topH += 2;
			document.getElementById("Btop").style.height = topH;
			timerB = setTimeout("trigger_top_open()",1);
		}
		if(topH >= MAX_TOPH) {
			stopTimerB();
		}
	}
	function trigger_top_close() {
		stopTimerB();
		if(topH > MIN_TOPH) {
			topH -= 2;
			document.getElementById("Btop").style.height = topH;
			timerB = setTimeout("trigger_top_close()",1);
		}
		if(topH <= MIN_TOPH) {
			stopTimerB();
		}
	}

	var timerC = null;
	var leftT = 111;
	function stopTimerC() {
		clearTimeout(timerC);
	}
	function trigger_left_down() {
		stopTimerC();
		if(leftT < 141) {
			leftT += 2;
			document.getElementById("left").style.top = leftT;
			timerC = setTimeout("trigger_left_down()",5);
		}
	}
	function trigger_left_up() {
		stopTimerC();
		if(leftT > 111) {
			leftT -= 2;
			document.getElementById("left").style.top = leftT;
			timerC = setTimeout("trigger_left_up()",5);
		}
	}

	function MM_swapImgRestore() { 
        var i,x,a=document.MM_sr; 
        for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) {
            x.src=x.oSrc;
        }
    }

    function MM_findObj(n, d) { 
        var p,i,x;
        if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
        if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
        for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
        if(!x && d.getElementById) x=d.getElementById(n); return x;
    }
    
    function MM_swapImage() { //mapID nothing img 1
        var i, j=0, x, a = MM_swapImage.arguments;
        document.MM_sr = new Array; 
        for(i=0; i<(a.length-2); i+=3) {
            if ((x = MM_findObj(a[i])) != null) {
                document.MM_sr[j++] = x;
                if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];
            }
        }
    }