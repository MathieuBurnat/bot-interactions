<?php $configs = include('config.php'); ?>

<!--
    This code has been pasted from Dialog Flow
    
    1) Go to : https://dialogflow.cloud.google.com/
    2) Select "Integrations"
    3) Eneable the option "Dialogflow Messenger"
    4) Copy Past the code
-->

<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

<df-messenger chat-title="a cactus manager" agent-id=<?=$configs["agentId"]?> language-code="en"/>

Time to be the pawner https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger#rendercustomtext

<style>
/* 
    Change the chatbox styles : 
*/

df-messenger {
    --df-messenger-button-titlebar-color: #4caf50;
}

/*
    More options : 
        --df-messenger-bot-message: #ff09ff;
        --df-messenger-button-titlebar-color: #ff09ff;
        --df-messenger-chat-background-color: #fafafa;
        --df-messenger-font-color: #fff;
        --df-messenger-user-message: #1187ee;

    Source :
        https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger#css-customize*/
</style>