
// user profile

const profile = document.getElementById('myprofile');

profile.width = window.innerWidth;
profile.height = window.innerHeight;

const p = profile.getContext('2d');

p.fillStyle = 'blue';
p.strokeStyle = '#000';
p.linewidth = 2;

p.arc(0, 0, 10, 0 , 2 * Math.PI);
p.fill();
p.strokeStyle();


// end user profile

// Check if the browser supports notifications
if ('Notification' in window) {
    // Request permission to show notifications
    Notification.requestPermission().then(permission => {
        if (permission === 'granted') {
            // Show notification
            new Notification('Title of Notification', {
                body: 'This is the body of the notification.',
                icon: 'path/to/icon.png' // URL to icon image
            });
        }
    });
}

// carousel

let span = document.getElementsByTagName('span');
	let product = document.getElementsByClassName('product')
	let product_page = Math.ceil(product.length/4);
	let l = 0;
	let movePer = 25.34;
	let maxMove = 203;
	// mobile_view	
	let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
	 }

	let right_mover = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}
	span[1].onclick = ()=>{right_mover();}
	span[0].onclick = ()=>{left_mover();}




