<?php
$token = '5094843152:AAE_FMuH5lNBG3cA7ar8FEbyKxJFEla0iRc';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

client.on("message", message => {
  if(message.channel.id === "927035566279753828"){
    if(message.author.bot) return;
    
    if(message.content === 'Acepto'){
      message.member.roles.add("927035566279753828");
      message.author.send("Gracias por verificarte");
      message.delete();
    }
    else{
      message.author.send("Tienes problemas? Habla con un admin.");
      message.delete();
    }
  }
});
