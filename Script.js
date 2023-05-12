function fn1()
{
    var student = document.getElementById("student");
    var admin = document.getElementById("admin");
    var managment = document.getElementById("managment");
    const ID = document.getElementById("ID");
    const password = document.getElementById("Password");
    const form = document.getElementById("form");

//     if((ID.value=='' || ID.value==null) && (password.value==null || password.value==''))
//     {
//         alert("Please enter your ID and the Password")
//     }

//     else if((password.value!='' || password.value!=null) && (ID.value=='' || ID.value==null))
//     {
//         alert("Please enter your ID")
//     }

//     else if((password.value=='' || password.value==null) && (ID.value!='' || ID.value!=null))
//     {
//         alert("Please enter your Password")
//     }

//     else
// {
    if(student.checked==true)
    {
        if(ID.value=='Group 4' && password.value=='Project')
        window.location.href="Home Page.html";
        else
        alert("Please check your information")
    }

    else if(admin.checked==true)
    {
        if(ID.value=='Admin' && password.value=='2022')
        window.location.href="http://www.youtube.com";
        else
        alert("Please check your information")
    }

    else if(managment.checked==true)
    {
        if(ID.value=='Manager' && password.value=='CEO')
        window.location.href="http://www.gmail.com";
        else
        alert("Please check your information")
    }

    else
    {
        alert("Please select your role!")
    }
}

    


function admin(){
    
    window.location.href="Sign-in Page Admin.html";
    admin.checked == true;
    
}


function AM(){
    window.location.href="Sign-in Page AM.php";
}

function SLogin(){
    window.location.href="Sign-in Page.php";
}





const menu = document.querySelector('.header .nav .nav-list .menu');
const mobile_menu = document.querySelector('.header .nav .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav .nav-list ul li a');
const header = document.querySelector('.header.container');

menu.addEventListener('click', () => {
	menu.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		menu.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});



// function myFunction() {
//     var x = document.getElementById("Password");
//     if (x.type === "password") {
//       x.type = "text";
//     } else {
//       x.type = "password";
//     }
//   }


