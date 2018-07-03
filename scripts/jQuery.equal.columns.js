function setH()
{
	obj1=document.getElementById('equal-1');
	obj2=document.getElementById('equal-4');
	obj3=document.getElementById('main-wrapper');
	H=Math.max(Math.max(obj1.offsetHeight,obj2.offsetHeight),obj3.offsetHeight);
	obj1.style.height=H+'px';
	obj2.style.height=H+'px';
	obj3.style.height=H+'px';
}

window.onload = setH;