@include('includes.header')

<style>
    .app-chat {
    padding-top: 7rem;
}
button.load-more {
    max-width: 230px;
}
</style>

    <main id="root">
        <div class="app-chat">
            <div class="container-xxl">
                <div class="app-chat--wrapper" id="chat-wrapper">
                    
                    <div class="chat-content" id="chat-content">
                        <div class="message-wrapper">
                            <div class="chat-bubble left img">
                                <img src="image/Ellie-Talks.gif" alt="" class="img-fluid">

                            </div>
                            <div class="chat-bubble left">
                                Hi, I'm Ellie!
                            </div>
                            <div class="chat-bubble left">
                                Which one of my friends are
                                you?
                            </div>
                        </div>

                        <!-- <div class="message-wrapper">
                        <div class="chat-bubble left">
                            Choose your name!
                        </div>
                    </div> -->
                        <div class="message-wrapper option-wrapper">
                            <div class="options choose-name">
                                
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
    
    @include('includes.footer')
    
    <script>
        var API_URL = 'http://127.0.0.1:8000/api/v1/'; 
        //var API_URL = 'https://chunkos.showmeproject.com/api/v1/';  
        $(document).ready(function(){
            let friendsList = [];
            $.ajax({  
            url: API_URL+'get-friends/',
            type: 'GET',  
            dataType: 'json',  
            success: function(data, textStatus, xhr) {  
                friendsList = data.data
                if(friendsList.length > 0){
                    for(let i=0; i <friendsList.length; i++){
                    $(".choose-name").append(`<div>
                                    <label for="`+friendsList[i].name+`">
                                        <input type="radio" name="name" id="`+friendsList[i].name+`" value="`+friendsList[i].name+`">
                                        <span>`+friendsList[i].name+`</span>
                                    </label>
                                </div>`);
                    }
                }
                
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Something went wrong');  
            }  

            });

        });

    function getVideos(cat) {

        let videosList = [];
        let videoData = '';
        $.ajax({
            url: API_URL + 'get-videos/',
            data: {
                video_category: cat
            },
            type: 'GET',
            dataType: 'json',
            success: function(data, textStatus, xhr) {
                console.log(data.data);
                videosList = data.data;
                let items = [];
                if (videosList.length > 0) {
                    for (let i = 0; i < videosList.length; i++) {
                        videoData += `<figure class="video-popup">
                                        <div class="position-relative bg-white video-banner">
                                            <img src="image/frame.svg" alt="" class="img-fluid">
                                            <img src="video_thumb/${videosList[i].video_thumb}" alt=""class="img-fluid position-absolute">
                                        </div>
                                    </figure>`;
                        items.push({
                            "src": videosList[i].video_url?.replace('&feature=youtu.be', ''),
                            "type": 'iframe'
                        })
                    }


                    $("#chat-content").append(`
                    <div class="message-wrapper">
                        <img src="image/Ellie.png" alt="" class="profile-pic left">
                        <div class="chat-bubble left video">
                            <div class="video-list">${videoData}</div>
                        </div>
                        <button class="load-more">Choose something</button>
                    </div>
                    `);
                    scrollBottom();
                    $(document).on("click", ".video-popup", function() {
                        popupInit(items, $(this).index());
                    });
                }

            },
            error: function(xhr, textStatus, errorThrown) {
                console.log('Something went wrong');
            }

        });

    }

        function userLogin(uName){
            window.localStorage.setItem("userName", uName);
        }

        function saveAvtar(avtar){
            window.localStorage.setItem("userAvtar", avtar);
        }

        function storeUserRes(userData){
          let sotredData = [];
          sotredData = JSON.parse(window.localStorage.getItem('userResponces'));  
          console.log(sotredData);
          if(sotredData){
            if(sotredData.length > 0 ){
                sotredData.push(userData);
                window.localStorage.setItem("userResponces", JSON.stringify(sotredData));
            }
          }else{
            var data = [];
            data.push(userData);
            window.localStorage.setItem("userResponces", JSON.stringify(data));
          }
          

        }

    </script>

    <script>
        let userName = '',
            avatar = '',
            emotion = '',
            msgBgColor = '';
        $(document).on("click", ".choose-name input[type='radio']", function (e) {
            userName = $(this).val();
            userLogin(userName);
            var uname = window.localStorage.getItem('userName');
            if(uname){
                $('.user_name').html('Hi, '+uname);
                $('.btn-getquote').show();
            }

            $(this).parents('.option-wrapper').hide();
            $("#chat-content").append(
                `<div class="message-wrapper"><div class="chat-bubble right">${userName}</div></div>`);
            scrollBottom();
            setTimeout(() => {
                $("#chat-content").append(`
                    <div class="message-wrapper">
                        <img src="image/Ellie.png" alt="" class="profile-pic left">
                        <div class="chat-bubble left">Welcome my friend, ${userName}!</div>
                        <div class="chat-bubble left">Choose an avatar for you, ${userName}!</div>
                    </div>
                    <div class="message-wrapper option-wrapper avatars">
                        <div class="options choose-avatar">
                            <div>
                                <label for="Herschel">
                                    <input type="radio" name="avatar" id="Herschel" value="Herschel">
                                    <img src="image/Herschel.png" alt="Herschel" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Ellie">
                                    <input type="radio" name="avatar" id="Ellie" value="Ellie">
                                    <img src="image/Ellie.png" alt="Ellie" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Humphrey">
                                    <input type="radio" name="avatar" id="Humphrey" value="Humphrey">
                                    <img src="image/Humphrey.png" alt="Humphrey" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Mabel">
                                    <input type="radio" name="avatar" id="Mabel" value="Mabel">
                                    <img src="image/Mabel.png" alt="Mabel" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Porthos">
                                    <input type="radio" name="avatar" id="Porthos" value="Porthos">
                                    <img src="image/Porthos.png" alt="Porthos" class="img-fluid">
                                </label>
                            </div>
                                                    
                        </div>
                    </div>

                `);
                scrollBottom()
            }, 1500)
        })

        $(document).on("click", ".choose-avatar input[type='radio']", function (e) {
            avatar = $(this).val();
            saveAvtar(avatar);
            var userAvtar = window.localStorage.getItem('userAvtar');
            if(userAvtar){
            $('.pro_img').html(`<img src="front/image/`+userAvtar+`.png" alt="" class="img-fluid">`);
            }
            $("input[name='avatar']").prop('disabled', true);
            $("#chat-content").append(
                `<div class="message-wrapper"><div class="chat-bubble right img"><img src="image/${avatar}.png" alt="" class="img-fluid"></div></div>`
            );
            scrollBottom();
            setTimeout(() => {
                $("#chat-content").append(`
                    <div class="message-wrapper">
                        <img src="image/Ellie.png" alt="" class="profile-pic left">
                        <div class="chat-bubble left">Amazing Choice!</div>
                    </div>
                `);
                scrollBottom()
            }, 1500)
            setTimeout(() => {
                $("#chat-content").append(`
                    <div class="message-wrapper">
                        <div class="chat-bubble left">How are you feeling today, ${userName}?</div>
                    </div>
                    <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-emotion">
                            <div>
                                <label for="Excited">
                                    <input type="radio" name="emotion" id="Excited" value="Ellie-Excited">
                                    <img src="image/Ellie-Excited.png" alt="Excited" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Happy">
                                    <input type="radio" name="emotion" id="Happy" value="Herschel-Happy">
                                    <img src="image/Herschel-Happy.png" alt="Happy" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Angry">
                                    <input type="radio" name="emotion" id="Angry" value="Humphrey-Angry">
                                    <img src="image/Humphrey-Angry.png" alt="Angry" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Sad">
                                    <input type="radio" name="emotion" id="Sad" value="Mabel-Sad">
                                    <img src="image/Mabel-Sad.png" alt="Sad" class="img-fluid">
                                </label>
                            </div>
                            <div>
                                <label for="Scared">
                                    <input type="radio" name="emotion" id="Scared" value="Porthos-Scared">
                                    <img src="image/Porthos-Scared.png" alt="Scared" class="img-fluid">
                                </label>
                            </div>                                                    
                        </div>
                    </div>
                `);
                scrollBottom()
            }, 2000)
        })

        $(document).on("click", ".choose-emotion input[type='radio']", function (e) {
            emotion = $(this).val();
            let userResData ={
                    'que': 'How are you feeling today?',
                    'ans': emotion
                    }
            storeUserRes(userResData);

            $("input[name='emotion']").prop('disabled', true);
            $("#chat-content").append(`
                <div class="message-wrapper">
                    <img src="image/${avatar}.png" alt="" class="profile-pic right">
                    <div class="chat-bubble right img">
                        <img src="image/${emotion}.png" alt="" class="img-fluid">
                    </div>
                </div>`);
            scrollBottom();
            switch (emotion) {
                case 'Ellie-Excited':
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Wow! Want to talk about it, ${userName}?</div>
                            </div>
                            <div class="message-wrapper option-wrapper">
                                <div class="options emotion-answer answers">
                                    <div>
                                        <label for="emotion_ans_yes">
                                            <input type="radio" name="emotion-answer" id="emotion_ans_yes" value="Yes">
                                            <span class="yes">Yes</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="emotion_ans_no">
                                            <input type="radio" name="emotion-answer" id="emotion_ans_no" value="No">
                                            <span class="no">No</span>
                                        </label>
                                    </div>                                
                                </div>
                            </div>
                        `);
                        scrollBottom()
                    }, 1500)
                    break;
                case 'Herschel-Happy':
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Great! Want to talk about it, ${userName}?</div>
                            </div>
                            <div class="message-wrapper option-wrapper">
                                <div class="options emotion-answer answers">
                                    <div>
                                        <label for="emotion_ans_yes">
                                            <input type="radio" name="emotion-answer" id="emotion_ans_yes" value="Yes">
                                            <span class="yes">Yes</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="emotion_ans_no">
                                            <input type="radio" name="emotion-answer" id="emotion_ans_no" value="No">
                                            <span class="no">No</span>
                                        </label>
                                    </div>                                
                                </div>
                            </div>
                        `);
                        scrollBottom()
                    }, 1500)
                    break;
                default:
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Ohh! Want to talk about it, ${userName}?</div>
                            </div>
                            <div class="message-wrapper option-wrapper">
                                <div class="options emotion-answer answers">
                                    <div>
                                        <label for="emotion_ans_yes">
                                            <input type="radio" name="emotion-answer" id="emotion_ans_yes" value="Yes">
                                            <span class="yes">Yes</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="emotion_ans_no">
                                            <input type="radio" name="emotion-answer" id="emotion_ans_no" value="No">
                                            <span class="no">No</span>
                                        </label>
                                    </div>                                
                                </div>
                            </div>
                        `);
                        scrollBottom()
                    }, 1500)
            }


        })
        $(document).on("click", ".emotion-answer input[type='radio']", function (e) {
            let ans = $(this).val();
            let userResData ={
                    'que': 'Ohh! Want to talk about it?',
                    'ans': ans
                    }
            storeUserRes(userResData);
            $("input[name='emotion-answer']").prop('disabled', true);
            $("#chat-content").append(`
                <div class="message-wrapper min-height">
                    <img src="image/${avatar}.png" alt="" class="profile-pic right">
                    <div class="chat-bubble right">
                        ${ans}
                    </div>
                </div>`);
            scrollBottom();

            switch (ans) {
                case 'No':
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Maybe we can cheer you up.</div>
                                <div class="chat-bubble left">Want to go on an adventure with us?</div>
                            </div>
                            <div class="message-wrapper option-wrapper">
                                <div class="options act-answer answers">
                                    <div>
                                        <label for="act_answer_yes">
                                            <input type="radio" name="act-answer" id="act_answer_yes" value="Yes">
                                            <span class="yes">Yes</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="act_answer_no">
                                            <input type="radio" name="act-answer" id="act_answer_no" value="No">
                                            <span class="no">No</span>
                                        </label>
                                    </div>                                
                                </div>
                            </div>
                        `);
                        scrollBottom()
                    }, 1500);
                    break;
                default:
                    setTimeout(() => {
                        $("#chat-content").append(`
                        <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Yay! Let's go!</div>
                            </div>
                            <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-cat">
                            <div>
                                <label for="Heal">
                                    <input type="radio" name="category" id="Heal" value="Heal">
                                    <span>Heal</span>
                                </label>
                            </div>
                            <div>
                                <label for="Laugh">
                                    <input type="radio" name="category" id="Laugh" value="Laugh">
                                    <span>Laugh</span>
                                </label>
                            </div>
                            <div>
                                <label for="Escape">
                                    <input type="radio" name="category" id="Escape" value="Escape">
                                    <span>Escape</span>
                                </label>
                            </div>
                            <div>
                                <label for="Create">
                                    <input type="radio" name="category" id="Create" value="Create">
                                    <span>Create</span>
                                </label>
                            </div>                                                  
                        </div>
                    </div>
                           
                        `);
                        scrollBottom()
                    }, 1500)
            }
        })
        $(document).on("click", ".act-answer input[type='radio']", function (e) {
            let ans = $(this).val();
            $("input[name='act-answer']").prop('disabled', true);
            $("#chat-content").append(`
                <div class="message-wrapper min-height">
                    <img src="image/${avatar}.png" alt="" class="profile-pic right">
                    <div class="chat-bubble right">
                        ${ans}
                    </div>
                </div>`);
            scrollBottom();
            switch (ans) {
                case 'No':
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">We are sad to see you leave us!</div>
                                <div class="chat-bubble left">Hope to see you in the future!</div>
                            </div>
                            <div class="message-wrapper option-wrapper">
                                <div class="options last-answer">
                                    <div>
                                        <label for="last_answer_yes">
                                            <input type="radio" name="act-answer" id="last_answer_yes" value="Goodbye">
                                            <span>Goodbye</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="last_answer_no">
                                            <input type="radio" name="act-answer" id="last_answer_no" value="Changed my mind">
                                            <span>Change Your Mind?</span>
                                        </label>
                                    </div>                                
                                </div>
                            </div>
                        `);
                        scrollBottom()
                    }, 1500);
                    break;
                default:
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Yay! Let's go!</div>
                            </div>
                            <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-cat">
                            <div>
                                <label for="Heal">
                                    <input type="radio" name="category" id="Heal" value="Heal">
                                    <span>Heal</span>
                                </label>
                            </div>
                            <div>
                                <label for="Laugh">
                                    <input type="radio" name="category" id="Laugh" value="Laugh">
                                    <span>Laugh</span>
                                </label>
                            </div>
                            <div>
                                <label for="Escape">
                                    <input type="radio" name="category" id="Escape" value="Escape">
                                    <span>Escape</span>
                                </label>
                            </div>
                            <div>
                                <label for="Create">
                                    <input type="radio" name="category" id="Create" value="Create">
                                    <span>Create</span>
                                </label>
                            </div>                                                  
                        </div>
                    </div>
                        `);
                        scrollBottom()
                    }, 1500)
            }
        })


        $(document).on("click", ".choose-cat input[type='radio']", function (e) {
            let ans = $(this).val();
            let userResData ={
                    'que': 'You choosed',
                    'ans': ans
                    }
            storeUserRes(userResData);
            $(".choose-cat").remove();
            $("#chat-content").append(`
                <div class="message-wrapper min-height">
                    <img src="image/${avatar}.png" alt="" class="profile-pic right">
                    <div class="chat-bubble right">
                        ${ans}
                    </div>
                </div>`);
            scrollBottom();
            switch (ans) {
                case 'Heal':
                    setTimeout(() => {
                        //$("#chat-content").append(`Heal`);
                        scrollBottom();
                    }, 1500);
                    break;
                case 'Laugh':
                    getVideos('Laugh');
                    break;
                case 'Escape':
                        getVideos('Escape');
                    break;
                
                case 'Create':
                    setTimeout(() => {
                        //$("#chat-content").append(`Laugh`);
                        window.open("/drawing");
                        scrollBottom();
                    }, 1500);                            
                    break;
                
                default:
                    setTimeout(() => {
                        $("#chat-content").append(`
                        <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Loading ...</div>
                            </div>
                        `);
                        scrollBottom()
                    }, 1500)
            }
        });

        function scrollBottom() {
            $("#chat-wrapper").animate({
                scrollTop: $("#chat-content")[0].scrollHeight
            }, {
                queue: false,
                duration: "ease"
            });
        }

       
        function popupInit(popupItems, index) {
        $.magnificPopup.open({
            items: popupItems,
            gallery: {
                enabled: true
            },
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allow="autoplay" allowfullscreen></iframe>' +
                    '<div class="mfp-bottom-bar">' +
                    '<div class="mfp-title"></div>' +
                    '<div class="mfp-counter"></div>' +
                    '</div>' +
                    '</div>',
                    
            },
            
            callbacks: {
                close: function() {
                    var didConfirm = confirm("Are you sure?");
                    if (didConfirm == false) {
                        return false;
                    }
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">I had so much fun on that adventure with you!</div>
                                <div class="chat-bubble left">Want to go on another adventure?</div>
                            </div>
                            <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-cat">
                            <div>
                                <label for="Heal">
                                    <input type="radio" name="category" id="Heal" value="Heal">
                                    <span>Heal</span>
                                </label>
                            </div>
                            <div>
                                <label for="Laugh">
                                    <input type="radio" name="category" id="Laugh" value="Laugh">
                                    <span>Laugh</span>
                                </label>
                            </div>
                            <div>
                                <label for="Escape">
                                    <input type="radio" name="category" id="Escape" value="Escape">
                                    <span>Escape</span>
                                </label>
                            </div>
                            <div>
                                <label for="Create">
                                    <input type="radio" name="category" id="Create" value="Create">
                                    <span>Create</span>
                                </label>
                            </div>                                                  
                        </div>
                    </div>
                        `);
                        scrollBottom()
                    }, 1500)
                }
            }
        }, index);

    }

        $(document).on("click", ".load-more", function (e) {
            $("#chat-content").append(`
                <div class="message-wrapper min-height">
                    <img src="image/${avatar}.png" alt="" class="profile-pic right">
                    <div class="chat-bubble right">
                        Choose something else
                    </div>
                </div>`);
            setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Yay! Let's go!</div>
                            </div>
                            <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-cat">
                            <div>
                                <label for="Heal">
                                    <input type="radio" name="category" id="Heal" value="Heal">
                                    <span>Heal</span>
                                </label>
                            </div>
                            <div>
                                <label for="Laugh">
                                    <input type="radio" name="category" id="Laugh" value="Laugh">
                                    <span>Laugh</span>
                                </label>
                            </div>
                            <div>
                                <label for="Escape">
                                    <input type="radio" name="category" id="Escape" value="Escape">
                                    <span>Escape</span>
                                </label>
                            </div>
                            <div>
                                <label for="Create">
                                    <input type="radio" name="category" id="Create" value="Create">
                                    <span>Create</span>
                                </label>
                            </div>                                                  
                        </div>
                    </div>
                        `);
                        scrollBottom()
                    }, 1500)
        });

        $(document).on("click", ".last-answer input[type='radio']", function (e) {
            let ans = $(this).val();
            console.log(ans);
            $("input[name='last-answer']").prop('disabled', true);
            $("#chat-content").append(`
                <div class="message-wrapper min-height">
                    <img src="image/${avatar}.png" alt="" class="profile-pic right">
                    <div class="chat-bubble right">
                        ${ans}
                    </div>
                </div>`);
            scrollBottom();
            switch (ans) {
                case 'Goodbye':
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">In case you change your mind</div>
                            </div>
                            <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-cat">
                            <div>
                                <label for="Heal">
                                    <input type="radio" name="category" id="Heal" value="Heal">
                                    <span>Heal</span>
                                </label>
                            </div>
                            <div>
                                <label for="Laugh">
                                    <input type="radio" name="category" id="Laugh" value="Laugh">
                                    <span>Laugh</span>
                                </label>
                            </div>
                            <div>
                                <label for="Escape">
                                    <input type="radio" name="category" id="Escape" value="Escape">
                                    <span>Escape</span>
                                </label>
                            </div>
                            <div>
                                <label for="Create">
                                    <input type="radio" name="category" id="Create" value="Create">
                                    <span>Create</span>
                                </label>
                            </div>                                                  
                        </div>
                    </div>
                        `);
                        scrollBottom()
                    }, 1500);
                    break;
                default:
                    setTimeout(() => {
                        $("#chat-content").append(`
                            <div class="message-wrapper">
                                <img src="image/Ellie.png" alt="" class="profile-pic left">
                                <div class="chat-bubble left">Yay! Let's go!</div>
                            </div>
                            <div class="message-wrapper option-wrapper emotions">
                        <div class="options choose-cat">
                            <div>
                                <label for="Heal">
                                    <input type="radio" name="category" id="Heal" value="Heal">
                                    <span>Heal</span>
                                </label>
                            </div>
                            <div>
                                <label for="Laugh">
                                    <input type="radio" name="category" id="Laugh" value="Laugh">
                                    <span>Laugh</span>
                                </label>
                            </div>
                            <div>
                                <label for="Escape">
                                    <input type="radio" name="category" id="Escape" value="Escape">
                                    <span>Escape</span>
                                </label>
                            </div>
                            <div>
                                <label for="Create">
                                    <input type="radio" name="category" id="Create" value="Create">
                                    <span>Create</span>
                                </label>
                            </div>                                                  
                        </div>
                    </div>
                        `);
                        scrollBottom()
                    }, 1500)
            }
        });


    </script>
</body>

</html>