@include('includes.header')
<main id="root">
        <div class="app-category app-drawing">
            <div class="container-xxl">
                <div class="app-draw--wrapper bg-transparent p-4 pt-0 rounded-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="tool-bar">
                                <div class="dropdown">
                                    <button id="color-swatch" title="Color palette" class="color-swatch dropdown-toggle"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        data-bs-auto-close="outside" style="--tool-color:#000000;">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="color-swatch">
                                        <div id="color-container" class="swatches">

                                            <label class="color-item" title="Black" for="#000000" aria-label="Black">
                                                <input type="radio" name="color-swatch" value="#000000" id="#000000"
                                                    style="background-color: rgb(0, 0, 0);" checked>
                                            </label>

                                            <label class="color-item" title="Grey 700" for="#5f6368"
                                                aria-label="Grey 700">
                                                <input type="radio" name="color-swatch" value="#5f6368" id="#5f6368"
                                                    style="background-color: rgb(95, 99, 104);">
                                            </label>

                                            <label class="color-item" title="Grey 500" for="#9aa0a6"
                                                aria-label="Grey 500">
                                                <input type="radio" name="color-swatch" value="#9aa0a6" id="#9aa0a6"
                                                    style="background-color: rgb(154, 160, 166);">
                                            </label>

                                            <label class="color-item" title="Grey 300" for="#dadce0"
                                                aria-label="Grey 300">
                                                <input type="radio" name="color-swatch" value="#dadce0" id="#dadce0"
                                                    style="background-color: rgb(218, 220, 224);">
                                            </label>

                                            <label class="color-item" title="Grey 100" for="#f1f3f4"
                                                aria-label="Grey 100">
                                                <input type="radio" name="color-swatch" value="#f1f3f4" id="#f1f3f4"
                                                    style="background-color: rgb(241, 243, 244);">
                                            </label>

                                            <label class="color-item" title="White" for="#ffffff" aria-label="White">
                                                <input type="radio" name="color-swatch" value="#ffffff" id="#ffffff"
                                                    style="background-color: rgb(255, 255, 255);">
                                            </label>

                                            <label class="color-item" title="Red 300" for="#f28b82"
                                                aria-label="Red 300">
                                                <input type="radio" name="color-swatch" value="#f28b82" id="#f28b82"
                                                    style="background-color: rgb(242, 139, 130);">
                                            </label>

                                            <label class="color-item" title="Yellow 300" for="#fdd663"
                                                aria-label="Yellow 300">
                                                <input type="radio" name="color-swatch" value="#fdd663" id="#fdd663"
                                                    style="background-color: rgb(253, 214, 99);">
                                            </label>

                                            <label class="color-item" title="Green 300" for="#81c995"
                                                aria-label="Green 300">
                                                <input type="radio" name="color-swatch" value="#81c995" id="#81c995"
                                                    style="background-color: rgb(129, 201, 149);">
                                            </label>

                                            <label class="color-item" title="Cyan 300" for="#78d9ec"
                                                aria-label="Cyan 300">
                                                <input type="radio" name="color-swatch" value="#78d9ec" id="#78d9ec"
                                                    style="background-color: rgb(120, 217, 236);">
                                            </label>

                                            <label class="color-item" title="Blue 300" for="#8ab4f8"
                                                aria-label="Blue 300">
                                                <input type="radio" name="color-swatch" value="#8ab4f8" id="#8ab4f8"
                                                    style="background-color: rgb(138, 180, 248);">
                                            </label>

                                            <label class="color-item" title="Purple 300" for="#c58af9"
                                                aria-label="Purple 300">
                                                <input type="radio" name="color-swatch" value="#c58af9" id="#c58af9"
                                                    style="background-color: rgb(197, 138, 249);">
                                            </label>

                                            <label class="color-item" title="Red 500" for="#ea4335"
                                                aria-label="Red 500">
                                                <input type="radio" name="color-swatch" value="#ea4335" id="#ea4335"
                                                    style="background-color: rgb(234, 67, 53);">
                                            </label>

                                            <label class="color-item" title="Yellow 500" for="#fbbc04"
                                                aria-label="Yellow 500">
                                                <input type="radio" name="color-swatch" value="#fbbc04" id="#fbbc04"
                                                    style="background-color: rgb(251, 188, 4);">
                                            </label>

                                            <label class="color-item" title="Green 500" for="#34a853"
                                                aria-label="Green 500">
                                                <input type="radio" name="color-swatch" value="#34a853" id="#34a853"
                                                    style="background-color: rgb(52, 168, 83);">
                                            </label>

                                            <label class="color-item" title="Cyan 500" for="#24c1e0"
                                                aria-label="Cyan 500">
                                                <input type="radio" name="color-swatch" value="#24c1e0" id="#24c1e0"
                                                    style="background-color: rgb(36, 193, 224);">
                                            </label>

                                            <label class="color-item" title="Blue 500" for="#4285f4"
                                                aria-label="Blue 500">
                                                <input type="radio" name="color-swatch" value="#4285f4" id="#4285f4"
                                                    style="background-color: rgb(66, 133, 244);">
                                            </label>

                                            <label class="color-item" title="Purple 500" for="#a142f4"
                                                aria-label="Purple 500">
                                                <input type="radio" name="color-swatch" value="#a142f4" id="#a142f4"
                                                    style="background-color: rgb(161, 66, 244);">
                                            </label>

                                            <label class="color-item" title="Red 700" for="#c5221f"
                                                aria-label="Red 700">
                                                <input type="radio" name="color-swatch" value="#c5221f" id="#c5221f"
                                                    style="background-color: rgb(197, 34, 31);">
                                            </label>

                                            <label class="color-item" title="Yellow 700" for="#f29900"
                                                aria-label="Yellow 700">
                                                <input type="radio" name="color-swatch" value="#f29900" id="#f29900"
                                                    style="background-color: rgb(242, 153, 0);">
                                            </label>

                                            <label class="color-item" title="Green 700" for="#188038"
                                                aria-label="Green 700">
                                                <input type="radio" name="color-swatch" value="#188038" id="#188038"
                                                    style="background-color: rgb(24, 128, 56);">
                                            </label>

                                            <label class="color-item" title="Cyan 700" for="#12a4af"
                                                aria-label="Cyan 700">
                                                <input type="radio" name="color-swatch" value="#12a4af" id="#12a4af"
                                                    style="background-color: rgb(18, 164, 175);">
                                            </label>

                                            <label class="color-item" title="Blue 700" for="#1967d2"
                                                aria-label="Blue 700">
                                                <input type="radio" name="color-swatch" value="#1967d2" id="#1967d2"
                                                    style="background-color: rgb(25, 103, 210);">
                                            </label>

                                            <label class="color-item" title="Purple 700" for="#8430ce"
                                                aria-label="Purple 700">
                                                <input type="radio" name="color-swatch" value="#8430ce" id="#8430ce"
                                                    style="background-color: rgb(132, 48, 206);">
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="dropdown">
                                    <button id="tool-option-button" class="option-button"
                                        title="Brush size &amp; opacity" style="--tool-color:#000000;" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path class="tool-option-button-light-body"
                                                d="M12.78,7.66,10.35,5.22,4,11.56V14H6.44Zm2.09-2.1a.42.42,0,0,0,0-.6L13,3.13a.42.42,0,0,0-.6,0L11.29,4.28l2.44,2.44Z">
                                            </path>
                                            <polygon class="tool-option-button-stroke-color"
                                                points="17 13 17 17 3 17 17 13"></polygon>
                                            <path class="tool-option-button-stroke-outline"
                                                d="M3,17L17,13L17,16L16,16L16,14.34L10.18,16L17,16L17,17z">
                                            </path>
                                            <path class="tool-option-button-dark-body"
                                                d="M12.78,7.66,11.56,6.44,4,14H6.44Zm2.09-2.1a.42.42,0,0,0,0-.6L14,4,12.51,5.49l1.22,1.22Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="tool-option-button">
                                        <div class="controls">
                                            <div class="column">
                                                <label id="size-slider-label" for="size-slider">
                                                    <span>Size</span>
                                                    <input class="slider" id="size-slider" type="range" min="1"
                                                        max="100" step="1" value="10" />
                                                </label>
                                                <label id="opacity-slider-label" for="opacity-slider">
                                                    <span>Opacity</span>
                                                    <input class="slider" id="opacity-slider" type="range" min="1"
                                                        max="100" step="1" value="100" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="stroke"></div>
                                <button id="tool-pen" class="active button-set" title="Pencil">
                                    <svg transform="rotate(90)" aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M493.2 56.26l-37.51-37.51C443.2 6.252 426.8 0 410.5 0c-16.38 0-32.76 6.25-45.26 18.75L45.11 338.9c-8.568 8.566-14.53 19.39-17.18 31.21l-27.61 122.8C-1.7 502.1 6.158 512 15.95 512c1.047 0 2.116-.1034 3.198-.3202c0 0 84.61-17.95 122.8-26.93c11.54-2.717 21.87-8.523 30.25-16.9l321.2-321.2C518.3 121.7 518.2 81.26 493.2 56.26zM149.5 445.2c-4.219 4.219-9.252 7.039-14.96 8.383c-24.68 5.811-69.64 15.55-97.46 21.52l22.04-98.01c1.332-5.918 4.303-11.31 8.594-15.6l247.6-247.6l82.76 82.76L149.5 445.2zM470.7 124l-50.03 50.02l-82.76-82.76l49.93-49.93C393.9 35.33 401.9 32 410.5 32s16.58 3.33 22.63 9.375l37.51 37.51C483.1 91.37 483.1 111.6 470.7 124z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="tool-smoothpen" class="button-set" title="Pen">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        transform="rotate(90)">
                                        <path fill="currentColor"
                                            d="M279.7 97.68L354.7 22.63C379.7-2.366 420.3-2.366 445.3 22.63L489.4 66.75C514.4 91.74 514.4 132.3 489.4 157.3L414.3 232.3L376.8 369.1C369.5 396.6 349 417.6 322.6 425.5L47.43 508.1C35.12 511.8 21.78 508.4 12.69 499.3C3.597 490.2 .232 476.9 3.925 464.6L86.47 189.4C94.4 162.1 115.4 142.5 142 135.2L279.7 97.68zM310.6 112L400 201.4L466.7 134.6C479.2 122.1 479.2 101.9 466.7 89.37L422.6 45.26C410.1 32.76 389.9 32.76 377.4 45.26L310.6 112zM283.3 129.9L150.5 166.1C134.5 170.5 121.9 182.7 117.1 198.6L42.7 446.7L152.9 336.5C147.2 326.1 144 315.9 144 304C144 268.7 172.7 240 208 240C243.3 240 272 268.7 272 304C272 339.3 243.3 368 208 368C196.1 368 185 364.8 175.5 359.1L65.33 469.3L313.4 394.9C329.3 390.1 341.5 377.5 345.9 361.5L382.1 228.7L283.3 129.9zM208 272C190.3 272 176 286.3 176 304C176 321.7 190.3 336 208 336C225.7 336 240 321.7 240 304C240 286.3 225.7 272 208 272z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="tool-highlighter" class="button-set" title="Brush">
                                    <svg transform="rotate(90)" aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M493.2 56.26l-37.51-37.51C443.2 6.252 426.8 0 410.5 0c-16.38 0-32.76 6.25-45.26 18.75L31.04 352.1c-2.234 2.234-3.756 5.078-4.377 8.176l-26.34 131.7C-1.703 502.1 6.156 512 15.95 512c1.049 0 2.117-.1035 3.199-.3203l131.7-26.34c3.098-.6191 5.941-2.141 8.176-4.373L493.3 146.7C518.3 121.7 518.2 81.26 493.2 56.26zM112 317.2l203.3-203.3l82.76 82.76L194.7 400H112V317.2zM139.8 454.9l-103.4 20.69l20.68-103.4L80 349.2V432h82.74L139.8 454.9zM470.7 124l-49.1 50l-82.76-82.76l49.91-49.91C393.9 35.33 401.9 32 410.5 32s16.58 3.328 22.62 9.373L470.6 78.89C483.1 91.36 483.1 111.6 470.7 124z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="tool-rectangle" class="button-set" title="Rectangle">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="rectangle"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M448 63.1H64c-35.35 0-64 28.65-64 63.1v256c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64v-256C512 92.65 483.3 63.1 448 63.1zM480 384c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V128c0-17.64 14.36-32 32-32h384c17.64 0 32 14.36 32 32V384z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="tool-circle" class="button-set" title="Circle">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="circle"
                                        class="svg-inline--fa fa-circle fa-w-16" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path transform="scale(1 0.8) translate(0 64)" fill="currentColor"
                                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 480c-123.5 0-224-100.5-224-224s100.5-224 224-224s224 100.5 224 224S379.5 480 256 480z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="tool-eraser" class="button-set" title="Eraser">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="eraser"
                                        class="svg-inline--fa fa-eraser fa-w-16" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M496 448l-172.3-.0313l174.2-173.1c9.31-9.375 13.97-21.69 13.97-34s-4.658-24.63-13.97-34l-159.1-160C328.6 36.66 316.3 32 303.1 32c-12.31 0-24.63 4.656-33.1 13.97L13.97 301.1C4.658 311.4 0 323.7 0 335.1s4.658 24.63 13.97 34l95.1 96c8.997 9 21.1 14 33.85 14h352.1c.0547 0-.0546 0 0 0C504.8 479.1 512 472.8 512 464C512 455.2 504.8 448 496 448zM292.6 68.72c3.124-3.125 7.185-4.688 11.25-4.688s8.123 1.562 11.25 4.688l159.1 160c3.124 3.125 4.686 7.188 4.686 11.25s-1.562 8.125-4.686 11.25l-116.6 116.8L175.9 185.3L292.6 68.72zM271.9 447.1h-127.1c-4.249 0-8.372-1.625-11.25-4.75l-95.97-96c-3.124-3.125-4.686-7.188-4.686-11.25s1.562-8.125 4.686-11.25l116.6-116.8l182.6 182.6l-52.73 52.63C280.3 446.3 276.1 447.1 271.9 447.1z">
                                        </path>
                                    </svg>
                                </button>

                                <div id="stroke"></div>
                                <!-- <button id="tool-undo">
                                       <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="reply" class="svg-inline--fa fa-reply fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M512 400v31.1C512 440.8 504.8 448 496 448S480 440.8 480 432v-31.1c0-79.41-64.59-143.1-144-143.1H60.2l158.1 131.7c6.781 5.656 7.688 15.75 2.031 22.53C217.1 414 212.6 416 208 416c-3.625 0-7.25-1.219-10.25-3.719l-192-159.1C2.094 249.3 0 244.7 0 239.1c0-4.75 2.094-9.247 5.75-12.28l192-159.1C204.5 62.07 214.6 62.94 220.3 69.75c5.656 6.781 4.75 16.87-2.031 22.53L60.2 224H336C433 224 512 302.1 512 400z"></path></svg>
                                    </button>
                                    <button id="tool-redo" disabled>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="share" class="svg-inline--fa fa-share fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M176 224h275.8l-158.1-131.7c-6.781-5.656-7.688-15.75-2.031-22.53c5.688-6.812 15.78-7.687 22.53-2.031l192 159.1C509.9 230.8 512 235.2 512 239.1c0 4.75-2.094 9.253-5.75 12.28l-192 159.1c-3 2.5-6.625 3.719-10.25 3.719c-4.562 0-9.125-1.969-12.28-5.75c-5.656-6.781-4.75-16.87 2.031-22.53l158.1-131.7H176c-79.41 0-144 64.59-144 143.1v31.1C32 440.8 24.84 448 16 448S0 440.8 0 432v-31.1C0 302.1 78.97 224 176 224z"></path></svg>
                                    </button> -->
                                <button id="tool-save" class="button-action" title="Save">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M432 128h-64C359.2 128 352 135.2 352 144S359.2 160 368 160h64C440.8 160 448 167.2 448 176v288c0 8.812-7.188 16-16 16h-352C71.19 480 64 472.8 64 464v-288C64 167.2 71.19 160 80 160h64C152.8 160 160 152.8 160 144S152.8 128 144 128h-64C53.53 128 32 149.5 32 176v288C32 490.5 53.53 512 80 512h352c26.47 0 48-21.53 48-48v-288C480 149.5 458.5 128 432 128zM148.7 260.7c-6.25 6.25-6.25 16.38 0 22.62l96 96C247.8 382.4 251.9 384 256 384s8.188-1.562 11.31-4.688l96-96c6.25-6.25 6.25-16.38 0-22.62s-16.38-6.25-22.62 0L272 329.4V16C272 7.156 264.8 0 256 0S240 7.156 240 16v313.4L171.3 260.7C165.1 254.4 154.9 254.4 148.7 260.7z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="tool-clear" class="button-action" title="Clear">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="trash-can-xmark" class="svg-inline--fa fa-trash-can-xmark fa-w-14"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor"
                                            d="M400 128C391.2 128 384 135.2 384 144v288c0 26.47-21.53 48-48 48h-224C85.53 480 64 458.5 64 432v-288C64 135.2 56.84 128 48 128S32 135.2 32 144v288C32 476.1 67.89 512 112 512h224c44.11 0 80-35.89 80-80v-288C416 135.2 408.8 128 400 128zM432 64h-96l-33.63-44.75C293.4 7.125 279.1 0 264 0h-80C168.9 0 154.6 7.125 145.6 19.25L112 64h-96C7.201 64 0 71.2 0 80C0 88.8 7.201 96 16 96h416C440.8 96 448 88.8 448 80C448 71.2 440.8 64 432 64zM152 64l19.25-25.62C174.3 34.38 179 32 184 32h80c5 0 9.75 2.375 12.75 6.375L296 64H152zM148.7 363.3c6.242 6.246 16.37 6.254 22.62 0L224 310.6l52.69 52.69c6.242 6.246 16.37 6.254 22.62 0c6.25-6.25 6.25-16.38 0-22.62L246.6 288l52.69-52.69c6.25-6.25 6.25-16.38 0-22.62s-16.38-6.25-22.62 0L224 265.4L171.3 212.7c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L201.4 288l-52.69 52.69C142.4 346.9 142.4 357.1 148.7 363.3z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div id="sketchpad"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  
  @include('includes.footer')

  <script src="front/js/sketchpad.min.js"></script>
    <script>
        function initSketchpad() {
            "use strict";
            window.NSSketchpad.watermarkImageSrc = 'front/image/logo-white.png';
            window.NSSketchpad.watermarkTitle = "The Chunkos";
            var defaultColor = "#00000";
            var opacity = 100;
            var currTool = 'pen';
            var sketchpadEl = document.getElementById("sketchpad");
            var sketchpad = new Sketchpad({
                containerEl: sketchpadEl,
                features: {
                    displayCrosshair: false,
                    displayGrid: false
                },
                createPageConfig: {
                    no: 1,
                    backgroundColor: "rgba(250,250,250,1)"
                }
            });
            window.sketchpad = sketchpad;
            window.sketchpad.watermark.alt = 'Instaacoders';
            // console.log(sketchpad)

            // document.getElementById('tool-undo').addEventListener("click", function () {
            //     sketchpad.undo();
            // });
            // document.getElementById('tool-redo').addEventListener("click", function () {
            //     sketchpad.redo();
            // });
            document.getElementById('tool-clear').addEventListener("click", function () {
                sketchpad.clearSketchpad();
            });
            document.getElementById('tool-save').addEventListener("click", function () {
                const link = document.createElement("a"); // creating <a> element
                link.download = `${Date.now()}.jpg`; // passing current date as link download value
                link.href = sketchpad.toDataURL(); // passing canvasData as link href value
                link.click();
            });
            const convertHexToRGBA = (hexCode, opacity = 1) => {
                let hex = hexCode.replace('#', '');

                if (hex.length === 3) {
                    hex = `${hex[0]}${hex[0]}${hex[1]}${hex[1]}${hex[2]}${hex[2]}`;
                }

                const r = parseInt(hex.substring(0, 2), 16);
                const g = parseInt(hex.substring(2, 4), 16);
                const b = parseInt(hex.substring(4, 6), 16);

                /* Backward compatibility for whole number based opacity values. */
                if (opacity > 1 && opacity <= 100) {
                    opacity = opacity / 100;
                }
                sketchpad.getCurrentTool().setColor(r, g, b, opacity);
                if (typeof sketchpad.getCurrentTool().setFillColor === "function") {
                    sketchpad.getCurrentTool().setFillColor(r, g, b, opacity);
                }
            };

            var rad = document.querySelectorAll('input[name=color-swatch]');
            var prev = null;
            for (var i = 0; i < rad.length; i++) {
                rad[i].addEventListener('change', function () {
                    // (prev) ? console.log(prev.value): null;
                    if (this !== prev) {
                        prev = this;
                    }
                    let colorBtn = document.getElementById('color-swatch');
                    let optionBtn = document.getElementById('tool-option-button');
                    colorBtn.style.setProperty('--tool-color', this.value);
                    optionBtn.style.setProperty('--tool-color', this.value);
                    defaultColor = this.value;
                    selectTool(currTool);
                });
            }
            // 
            function selectTool(toolId) {
                sketchpad.setTool(toolId);
                document.querySelectorAll(".button-set").forEach(function (el) {
                    el.classList.remove("active");
                });
                document.getElementById("tool-" + toolId).classList.add("active");
                if (toolId !== 'eraser') {
                    convertHexToRGBA(defaultColor, opacity);
                    document.getElementById('opacity-slider-label').style.display = '';
                } else {
                    document.getElementById('opacity-slider-label').style.display = 'none';
                }
                let tool = sketchpad.getCurrentTool();
                convertHexToRGBA(defaultColor, 100);
                document.getElementById("opacity-slider").value = 100;
                if (typeof tool.getSize === "function") {
                    var size = tool.getSize();
                    // console.log(toolId, size)
                    document.getElementById("size-slider").value = size;
                    if (typeof tool.setSize === "function") {
                        switch (toolId) {
                            case 'pen':
                                sketchpad.getCurrentTool().setSize(1 + (size * 0.05));
                                break;
                            case 'smoothpen':
                                sketchpad.getCurrentTool().setSize(1 + (size * 0.05));
                                break;
                            case 'highlighter' || 'rectangle' || 'circle':
                                sketchpad.getCurrentTool().setSize(4 + (size * 0.46));
                                break;
                            case 'eraser':
                                sketchpad.getCurrentTool().setSize(4 + (size * 0.46));
                                break;

                        }
                    }
                }
            }

            document.getElementById('tool-eraser').addEventListener("click", function () {
                currTool = 'eraser';
                selectTool(currTool);
            });
            document.getElementById('tool-highlighter').addEventListener("click", function () {
                currTool = 'highlighter';
                selectTool(currTool);
            });
            document.getElementById('tool-pen').addEventListener("click", function () {
                currTool = 'pen';
                selectTool(currTool);
            });
            document.getElementById('tool-smoothpen').addEventListener("click", function () {
                currTool = 'smoothpen';
                selectTool(currTool);
            });
            document.getElementById('tool-rectangle').addEventListener("click", function () {
                currTool = 'rectangle';
                selectTool(currTool);
            });
            document.getElementById('tool-circle').addEventListener("click", function () {
                currTool = 'circle';
                selectTool(currTool);
            });
            document.getElementById("size-slider").addEventListener("change", function (e) {
                if (typeof sketchpad.getCurrentTool().setSize === "function") {
                    let tool = sketchpad.getCurrentTool();
                    if (tool.toolId == "smoothpen") {
                        sketchpad.getCurrentTool().setSize(1 + (e.target.value * 0.05));
                        return;
                    }
                    if (tool.toolId == "pen") {
                        sketchpad.getCurrentTool().setSize(1 + (e.target.value * 0.05));
                        return;
                    }

                    if (tool.toolId == 'highlighter' || tool.toolId == 'rectangle' || tool.toolId == 'circle') {
                        sketchpad.getCurrentTool().setSize(4 + (e.target.value * 0.46));
                        return;
                    }
                    if (tool.toolId == 'eraser') {
                        sketchpad.getCurrentTool().setSize(4 + (e.target.value * 0.46));
                        return;
                    }
                }
            });
            document.getElementById("opacity-slider").addEventListener("change", function (e) {
                if (typeof sketchpad.getCurrentTool().setColor === "function") {
                    let tool = sketchpad.getCurrentTool();
                    if (tool.toolId == "smoothpen") {
                        convertHexToRGBA(defaultColor, e.target.value);
                        return;
                    }
                    if (tool.toolId == "pen") {
                        convertHexToRGBA(defaultColor, e.target.value);
                        return;
                    }

                    if (tool.toolId == 'highlighter' || tool.toolId == 'rectangle' || tool.toolId == 'circle') {
                        convertHexToRGBA(defaultColor, e.target.value);
                        return;
                    }
                }
            });
            selectTool(currTool);
        }
        initSketchpad();
    </script>

</body>

</html>