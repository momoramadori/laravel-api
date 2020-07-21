require('./bootstrap');
const $ = require('jquery');

var api_key = 'vFxDdENPElKnTqq3bDhPVaKGU8qTOFx2UkNf9BxgeiPCXwY12oBNo9Za2ggpxMGPdZdq40jLJ8bybbNX';

$.ajax({
    'url':'http://127.0.0.1:8000/api/movies',
    'method': 'GET',
    'headers': {
        Authorization: 'Bearer '+ api_key
    },
    'success' : function(data){
        for (let index = 0; index < data.data.length; index++) {
            $('.risultati').append('<h1>' + data.data[index].title + '</h1>');
            $('.risultati').append('<p>' + data.data[index].overview + '</p>');
            $('.risultati').append('<p>' + data.data[index].rating + '</p>');
            
        }
    },
    'error': function(){
        alert('errore');
    }
})

