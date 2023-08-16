$(document).ready(function(){
    $(".veen .rgstr-btn button").click(function(){
        $('.veen .wrapper').addClass('move');
        $('.body').css('background-image', 'url("https://images.unsplash.com/photo-1574763788197-1808b6ac8142?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1035&q=80")'); // Replace with the actual image path
        $(".veen .login-btn button").removeClass('active');
        $(this).addClass('active');
    });

    $(".veen .login-btn button").click(function(){
        $('.veen .wrapper').removeClass('move');
        $('.body').css('background-image', 'url("https://images.unsplash.com/photo-1574763788197-1808b6ac8142?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1035&q=80")'); // Replace with the actual image path
        $(".veen .rgstr-btn button").removeClass('active');
        $(this).addClass('active');
    });
});
