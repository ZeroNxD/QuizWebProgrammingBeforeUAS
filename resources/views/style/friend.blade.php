<style>
    .friend-list {
        display: flex;
        flex-direction: column;
    }

    .friend-box {
        display: flex;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 8px;
        background-color: #f9f9f9;
        margin-bottom: 10px;
        position: relative;
    }

    .friend-info {
        display: flex;
        align-items: center;
    }

    .friend-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 15px;
    }

    .friend-details {
        margin-left: 30px;
    }

    .friend-details h3 {
        margin-bottom: 10px;
    }

    .friend-details p {
        margin: 5px 0;
    }

    .buttons {
        margin-top: 10px;
        text-align: right;
        position: absolute;
        bottom: 15px;
        right: 15px;
        justify-content: space-between;
        width: 500px;
    }

    button {
        padding: 8px 15px;
        margin-right: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        
    }

    button:hover {
        background-color: #245727;
    }

    .Chat, .VideoCall {
        font-size: 16px;
        border-radius: 10px;
    }

    .buttons-container {
        display: flex;
        justify-content: space-between; 
        gap: 10px; 
        margin-bottom: 20px; 
    }

    .buttons-container .listbutton{
        text-align: right;
    }

    .buttons-container .listbutton button{
        border-radius: 8px;
        margin-left : 30px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
</style>