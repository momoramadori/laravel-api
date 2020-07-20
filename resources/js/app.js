require('./bootstrap');
const $ = require('jquery');

var api_key = 'vFxDdENPElKnTqq3bDhPVaKGU8qTOFx2UkNf9BxgeiPCXwY12oBNo9Za2ggpxMGPdZdq40jLJ8bybbNX';

$.ajax({
    'url':'http://127.0.0.1:8000/api/movies',
    'method': 'GET',
    'data':{
        'api_token': api_key,
    },
    'success' : function(data){
        console.log(data);
        $('.risultati').html(data);
    },
    'error': function(){
        alert('errore');
    }
})

