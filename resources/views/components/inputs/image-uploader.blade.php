     <div>
                <div class="w-full h-full mb-1  rounded-lg overflow-hidden relative">
                    {{$default_image}}
                    <div class="absolute top-0 left-0 right-0 bottom-0 w-full block cursor-pointer flex items-center justify-center" onclick="document.getElementById('fileInput').click()">
                        <span  style="background-color: rgba(255, 255, 255, 0.65)" class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm   rounded-lg shadow-sm">
                            <svg  class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"></path>
                                <circle cx="12" cy="13" r="3"></circle>
                            </svg>
                        </span>
                    </div>
                </div>
                <input name="{{$name}}" id="fileInput"  class="hidden" type="file" onchange="let file = this.files[0];
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        document.getElementById('image').src = e.target.result;
                        document.getElementById('image2').src = e.target.result;
                    };

                    reader.readAsDataURL(file);
                ">
            </div>
