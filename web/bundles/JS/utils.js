function display_profil_menu()
{
	if (document.getElementById("profil_menu").style.opacity == "1")
	{
		document.getElementById("profil_menu").style.opacity="0";
		document.getElementById("profil_menu").style.visibility="hidden";
		document.getElementById("profil_menu").style.height="0px";
	}
	else
	{
		document.getElementById("profil_menu").style.opacity="1";
		document.getElementById("profil_menu").style.visibility="visible";
		document.getElementById("profil_menu").style.height="300px";
	}
}

function display_login()
{
	if (document.getElementById("login").style.opacity == "1")
	{
		document.getElementById("login").style.opacity="0";
		document.getElementById("login").style.visibility="hidden";
		document.getElementById("profil_menu").style.opacity="0";
		document.getElementById("profil_menu").style.visibility="hidden";
		document.getElementById("profil_menu").style.height="0px";
	}
	else
	{
		document.getElementById("login").style.opacity="1";
		document.getElementById("login").style.visibility="visible";
		document.getElementById("register").style.opacity="0";
		document.getElementById("register").style.visibility="hidden";
		document.getElementById("profil_menu").style.opacity="0";
		document.getElementById("profil_menu").style.visibility="hidden";
		document.getElementById("profil_menu").style.height="0px";
	}
}

function display_register()
{
	if (document.getElementById("register").style.opacity == "1")
	{
		document.getElementById("register").style.opacity="0";
		document.getElementById("register").style.visibility="hidden";
	}
	else
	{
		document.getElementById("register").style.opacity="1";
		document.getElementById("register").style.visibility="visible";
		document.getElementById("login").style.opacity="0";
		document.getElementById("login").style.visibility="hidden";
		document.getElementById("register").style.top="200px";
	}
}

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('background'), {
    dotColor: 'rgba(196, 200, 201,0.4)',
    lineColor: 'rgba(216, 220, 221,0.7)',
    density: '12000',
  });
}, false);