document.getElementById('whatsapp-form').addEventListener('submit',function(event){
    event.preventDefault();
    const message=document.getElementById('message').value;
    const phoneNumber='22675326101';
    if(message.trim()!==''){
        const url='https://wa.me/${phonenumber}?text=${encodeURIComponent(message)}';
        window.open(url,'_blank');
    }else{
        alert('Veuillez écrire votre message.');
    }
});