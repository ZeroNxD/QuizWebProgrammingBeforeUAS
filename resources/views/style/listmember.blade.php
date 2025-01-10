<style>
    .member-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: stretch;
    }

    .member-card img{
        flex-shrink: 0;
        width: 180px;
        height: 180px;
        border-radius: 5px;
        border: 2px solid gray;
        object-fit: cover;
    }

    .member-info {
        flex-grow: 1;
        padding-left:15px;
        flex-direction: column;
        justify-content: space-between;
    }

    .member-info h3{
        font-weight: bold;
        margin-bottom: 10px;
    }

    .member-info p {
        margin: 5px 0;
        color: #555;
    }

    .member-info .buttons{
        margin-top: 30px;
        text-align: right;
        display: flex;
        justify-content: flex-start;
        gap: 10px;
    }

    .member-info .buttons .ThumbsUp{
        background-color: #02a605;
        color: rgb(255, 255, 255);
        border: 2px solid rgb(89, 89, 89);
        border-radius: 8px;
        font-size: 14px;
        padding: 10px 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 15px;
        margin-right: 20px;
        flex: 1;
        text-align: center;
        height: 45px;
    }

    .member-info .buttons .CheckDetails{
        background-color: #00605d;
        color: rgb(255, 255, 255);
        border: 2px solid rgb(38, 38, 38);
        border-radius: 8px;
        font-size: 14px;
        padding: 10px 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 15px;
        margin-right: 10px;
        flex: 1;
        text-align: center;
        height: 45px;
    }

    .member-info .buttons .ThumbsUp:hover{
        background-color: #2200ff;
        color: rgb(255, 255, 255);
        border: 2px solid rgb(89, 89, 89);
    }

    .member-info .buttons .CheckDetails:hover{
        background-color: #d70000;
        color: rgb(255, 255, 255);
        border: 2px solid rgb(38, 38, 38);
    }

    input[type="checkbox"] {
        margin-right: 10px;
        transform: scale(1.5);
    }

    .checkbox-group {
        display: grid;
        grid-template-columns: repeat(6, 1fr); /* 6 item per baris */
        gap: 15px; /* Jarak antar checkbox */
    }

    .checkbox-item {
        display: flex;
        align-items: center;
    }

    .checkbox-group .checkbox-item {
        margin-bottom: 5px;
    }

</style>