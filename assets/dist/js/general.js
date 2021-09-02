jQuery(document).ready(function ($) {
	var parts = window.location.pathname.split("/");
	var lastSegment = parts.pop(); 

	 switch (lastSegment){
            case 'categorias':
                $('.categorias').addClass('active')
                $('.activarperfiles').removeClass('active');
                $('.publicidad').removeClass('active');
                break;
            case 'activaperfil':
                $('.categorias').removeClass('active')
                $('.activarperfiles').addClass('active');
                $('.publicidad').removeClass('active');
                break;
            case 'publicidad':
                $('.categorias').removeClass('active')
                $('.activarperfiles').removeClass('active');
                $('.publicidad').addClass('active');
                break;
            
        }


});