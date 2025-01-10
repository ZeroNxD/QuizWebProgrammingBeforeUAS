<style>
    .Home-Content {
        position: relative; 
        width: 100%; 
        height: 100vh; 
        overflow: hidden; 
        justify-content: center;
        text-align: center;
    }

    .Home-Content img {
        width: 80%; 
        height: 80%; 
        object-fit: cover; 
        border-radius: 16px;
        border: 3px solid black;
        
    }

    .Home-Content .overlay-text {
        position: absolute;
        top: 40%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        color: white; 
        text-align: center; 
        background: rgba(0, 0, 0, 0.5); 
        padding: 20px; 
        border-radius: 10px; 
        width: 60%;
    }

    .Home-Content .overlay-text h1{
        font-weight: bold;
        font-size: 40px;
    }

    .Home-Content .overlay-text p{
        font-weight: bold;
    }

    .Home-Content .overlay-text button{
        background-color: #1c1442;
        color: white;
        border: 2px solid white;
        border-radius: 10px;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 30px;
    }

    .Home-Content .overlay-text button:hover {
        background-color: #0c93e7; 
        color: black;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); 
    }

    .AboutApp{
        text-align: center;
        margin-top: 0px;
        padding: 20px;
    }

    .About-Content{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .AboutApp h1{
        font-size: 30px;
        font-weight: bold;
    }

    .AboutApp img{
        width: 300px;
        height: 200px;
        border-radius: 10px;
        margin-right: 60px;
    }

    .About-Text{
        max-width: 700px;
        text-align: left;
        margin-left: -20px;
    }

    .About-Text h1 {
        font-size: 30px;
        margin-bottom: 30px;
        text-decoration: underline;
    }

    .About-Text p {
        font-size: 16px;
        line-height: 1.6;
    }

    .AppFeature {
        display: flex;
        justify-content: space-between; 
        align-items: stretch; 
        padding: 20px;
    }

    .MemberList, .FriendList {
        width: 48%; 
        text-align: center; 
        background-color: #f1f1f1; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        justify-content: space-between;
    }

    .MemberList h1, .FriendList h1 {
        color: #333;
        font-size: 24px;
        font-weight: bold;
    }

    .MemberList img, .FriendList img{
        width: 300px;
        height: 200px;
        margin-top: 20px;
        border: 3px solid black;
        border-radius: 15px;
    }

    .MemberList p, .FriendList p{
        font-size: 15px;
        margin-top: 20px;
        flex-grow: 1;
    }

    .MemberList button{
        background-color: #e5f506;
        color: rgb(0, 0, 0);
        border: 3px solid rgb(0, 0, 0);
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 40px;
    }

    .MemberList button:hover{
        background-color: #0c93e7; 
        color: rgb(255, 255, 255);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); 
    }

    .FriendList button{
        background-color: #07eb6a;
        color: rgb(0, 0, 0);
        border: 2px solid rgb(0, 0, 0);
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 15px;
    }

    .FriendList button:hover{
        background-color: #0c93e7; 
        color: rgb(255, 255, 255);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); 
    }
</style>