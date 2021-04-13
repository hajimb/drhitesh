<style type="text/css">
body,
html {
    background: #d8d8d8;
    position: relative;
    margin: 0;
    width: 100%;
    height: 100%;text-align: center;
}

#mainC {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #000;
    font-family: sans-serif;
    max-width: 340px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -o-user-select: none;
    user-select: none;

    .message {
        font-size: 16px;
        text-align: center;
        h1 {
            margin: 0;
            padding: 0;
            font-size: 11em;
            transform: skewY(-5deg);
            transition: 0.4s ease-in-out all;
            &:hover {
                text-shadow: 20px 20px 0 fade(#afd33d, 10%);
            }
            @media (max-width: 300px) {
                font-size: 50vw;
            }
        }
        h3 {
            color: #afd33d;
            font-size: 0.9em;
            font-weight: lighter;
            line-height: 1;
            @media (max-width: 300px) {
                font-size: 5vw;
            }
        }
    }
}
</style>
<div id="mainC">
    <div class="message">
        <h1>404</h1>
        <h3>Page Not Found</h3>
    </div>
</div>