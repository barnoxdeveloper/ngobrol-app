<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngobrol App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .chat-widget {
            height: 600px; /* set the desired height here */
            overflow-y: scroll; /* add vertical scrollbar when content exceeds height */
        }

        .chat-bubble {
            background-color: #f1f0f0;
            border-radius: 25px;
            padding: 10px 15px;
            margin-bottom: 10px;
            max-width: 75%;
        }

        .chat-bubble-right {
            background-color: #0d6efd;
            color: #fff;
            margin-left: auto;
            margin-right: 0;
        }

        .card {
            border-radius: 25px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
  <body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="m-1">Ngobrol With Chat GPT</h3>
                </div>
                <div class="card-body">
                    <div class="chat-widget">
                        <div class="chat-bubble chat-bubble-right">
                            <p>Hi there!</p>
                        </div>
                        <div class="chat-bubble">
                            <p>Hello!</p>
                        </div>
                        <div class="chat-bubble chat-bubble-right">
                            <p>Hi there!</p>
                        </div>
                        <div class="chat-bubble">
                            <p>How are you?</p>
                        </div>
                        <div class="chat-bubble chat-bubble-right">
                            <p>I'm good, thanks! How about you?</p>
                        </div>
                        <div class="chat-bubble">
                            <p>Same here. Did you finish the project?</p>
                        </div>
                        <div class="chat-bubble chat-bubble-right">
                            <p>Yes, I did. I'll send you the files later.</p>
                        </div>
                        <div class="chat-bubble">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, perferendis!</p>
                        </div>
                        <div class="chat-bubble chat-bubble-right">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qdae accusantium dicta enim voluptatibus beatae!</p>
                        </div>
                        <div class="chat-bubble">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="chat-bubble chat-bubble-right">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero fugit repellendus, ad atque praesentium.</p>
                        </div>
                        <div class="chat-bubble">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolore nisi architecto quis nam numquam autem sequi quasi, eaque magni!</p>
                        </div>
                        <div class="chat-bubble chat-bubble-right">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet placeat corrupti saepe magnam incidunt natus inventore cum.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <textarea class="form-control me-2" placeholder="Type your message. . ."></textarea>
                        <button class="btn btn-primary ms-auto"><i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
