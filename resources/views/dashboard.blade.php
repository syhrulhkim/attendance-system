<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid-container p-6 text-gray-900 dark:text-gray-100">
                    <div class="item-1">
                        <div class="formbold-event-details">
                            <h5>Attendance Details</h5>
                                @if ($attendanceList->isEmpty())
                                    <div class="" style="color: black; padding:15px 25px; border-top: 1px solid black;">
                                        No Attendance List
                                    </div>
                                @else
                                    @foreach($attendanceList as $item)
                                    <ul style="border-top: 1px solid black;">
                                        <li>
                                            <svg
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18" 
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1675_1725)">
                                                <path
                                                d="M12.75 2.25H15.75C15.9489 2.25 16.1397 2.32902 16.2803 2.46967C16.421 2.61032 16.5 2.80109 16.5 3V15C16.5 15.1989 16.421 15.3897 16.2803 15.5303C16.1397 15.671 15.9489 15.75 15.75 15.75H2.25C2.05109 15.75 1.86032 15.671 1.71967 15.5303C1.57902 15.3897 1.5 15.1989 1.5 15V3C1.5 2.80109 1.57902 2.61032 1.71967 2.46967C1.86032 2.32902 2.05109 2.25 2.25 2.25H5.25V0.75H6.75V2.25H11.25V0.75H12.75V2.25ZM11.25 3.75H6.75V5.25H5.25V3.75H3V6.75H15V3.75H12.75V5.25H11.25V3.75ZM15 8.25H3V14.25H15V8.25Z"
                                                fill="#536387"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1675_1725">
                                                <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                            {{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}
                                        </li>
                                        <li>
                                            <svg
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1675_1735)">
                                                <path
                                                d="M9 16.5C4.85775 16.5 1.5 13.1422 1.5 9C1.5 4.85775 4.85775 1.5 9 1.5C13.1422 1.5 16.5 4.85775 16.5 9C16.5 13.1422 13.1422 16.5 9 16.5ZM9 15C10.5913 15 12.1174 14.3679 13.2426 13.2426C14.3679 12.1174 15 10.5913 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.5913 3.63214 12.1174 4.75736 13.2426C5.88258 14.3679 7.4087 15 9 15ZM9.75 9H12.75V10.5H8.25V5.25H9.75V9Z"
                                                fill="#536387"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1675_1735">
                                                <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                            {{ $item->start_time }} to {{ $item->end_time }} ({{ $item->hours }} hours)
                                        </li>
                                        <li>
                                            <svg
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1675_1730)">
                                                <path
                                                d="M9 17.7959L4.227 13.0229C3.28301 12.0789 2.64014 10.8762 2.3797 9.56683C2.11925 8.25746 2.25293 6.90026 2.76382 5.66687C3.27472 4.43347 4.13988 3.37927 5.24991 2.63757C6.35994 1.89588 7.66498 1.5 9 1.5C10.335 1.5 11.6401 1.89588 12.7501 2.63757C13.8601 3.37927 14.7253 4.43347 15.2362 5.66687C15.7471 6.90026 15.8808 8.25746 15.6203 9.56683C15.3599 10.8762 14.717 12.0789 13.773 13.0229L9 17.7959ZM12.7125 11.9624C13.4467 11.2282 13.9466 10.2927 14.1492 9.27435C14.3517 8.25596 14.2477 7.20039 13.8503 6.24111C13.4529 5.28183 12.78 4.46192 11.9167 3.88507C11.0533 3.30821 10.0383 3.00032 9 3.00032C7.96167 3.00032 6.94666 3.30821 6.08332 3.88507C5.21997 4.46192 4.54706 5.28183 4.14969 6.24111C3.75231 7.20039 3.64831 8.25596 3.85084 9.27435C4.05337 10.2927 4.55333 11.2282 5.2875 11.9624L9 15.6749L12.7125 11.9624ZM9 9.74994C8.60218 9.74994 8.22065 9.5919 7.93934 9.3106C7.65804 9.02929 7.5 8.64776 7.5 8.24994C7.5 7.85212 7.65804 7.47058 7.93934 7.18928C8.22065 6.90798 8.60218 6.74994 9 6.74994C9.39783 6.74994 9.77936 6.90798 10.0607 7.18928C10.342 7.47058 10.5 7.85212 10.5 8.24994C10.5 8.64776 10.342 9.02929 10.0607 9.3106C9.77936 9.5919 9.39783 9.74994 9 9.74994Z"
                                                fill="#536387"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1675_1730">
                                                <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                            @if ($item->shift == "shifta")
                                                Shift A
                                            @else 
                                                Shift B
                                            @endif
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                            @if ($item->break_time == '')
                                                No Break
                                            @else 
                                                {{ $item->break_time }}
                                            @endif
                                        </li>
                                    </ul>
                                    @endforeach
                                @endif
                        </div>
                    </div>
                    <div class="item-2 w-full formbold-main-wrapper">
                        <div class="formbold-form-wrapper">
                            <form action="{{ route('insert-data') }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="formbold-input-flex-full-width">
                                    <div>
                                        <label for="firstname" class="formbold-form-label"> User name </label>
                                        <input
                                        type="text"
                                        name="firstname"
                                        id="firstname"
                                        placeholder="{{ Auth::user()->name }}"
                                        class="formbold-form-input"
                                        disabled
                                        />
                                    </div>
                                </div>

                                <div class="formbold-mb-5">
                                    <label for="qusOne" class="formbold-form-label">
                                        Which shifts do you want to work?
                                    </label>

                                    <div class="formbold-radio-flex">
                                        <div class="formbold-radio-group">
                                            <label class="formbold-radio-label">
                                            <input
                                                class="formbold-input-radio"
                                                type="radio"
                                                name="shift"
                                                value="shifta"
                                                id="shift"
                                                required
                                            />
                                            Shift A = Start at 6:00AM
                                            <span class="formbold-radio-checkmark"></span>
                                            </label>
                                        </div>

                                        <div class="formbold-radio-group">
                                            <label class="formbold-radio-label">
                                            <input
                                                class="formbold-input-radio"
                                                type="radio"
                                                name="shift"
                                                value="shiftb"
                                                id="shift"
                                                required
                                            />
                                            Shift B = Start at 7:00PM
                                            <span class="formbold-radio-checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="formbold-input-flex">
                                    <div>
                                        <input
                                            type="date"
                                            name="date"
                                            id="dateInput"
                                            placeholder="date"
                                            class="formbold-form-input"
                                            required
                                        />
                                        <label for="date" class="formbold-form-label"> Date </label>
                                    </div>
                                    <div>
                                        <input
                                            type="number"
                                            name="hours"
                                            id="hours"
                                            placeholder="Any Number"
                                            class="formbold-form-input"
                                            required
                                            oninput="limitInput()"
                                        />
                                        <label for="hours" class="formbold-form-label"> Hours </label>
                                        <p id="charLimitMessage" style="color: red;"></p>
                                    </div>
                                </div>

                                <button id="myButton" class="formbold-btn" disabled>
                                    Submit Attendance
                                </button>
                            </form>

                            @if(session('workingHoursDisplay'))
                                <div class="formbold-form-wrapper">
                                    <div style="padding: 24px 0px 24px 0px;">
                                        <div style="border: 1px solid white; border-radius: 10px; padding: 10px">
                                            <h1 style="font-weight: 900; text-decoration: underline;">
                                                Working Hours List : 
                                            <h1><br>
                                            @foreach(explode(', ', session('workingHoursDisplay')) as $workHour)
                                                {{ $workHour }} <br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script type="text/javascript">
        // Get the current date in the format YYYY-MM-DD
        function getCurrentDate() {
            const now = new Date();
            const year = now.getFullYear();
            const month = (now.getMonth() + 1).toString().padStart(2, '0');
            const day = now.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
        // Set the min attribute of the date input to the current date
        document.getElementById('dateInput').min = getCurrentDate();

        // Validation for limit input hours
        function limitInput() {
            var inputField = document.getElementById("hours");
            var charLimitMessage = document.getElementById("charLimitMessage");
            var myButton = document.getElementById("myButton");

                if (inputField.value <= 0) {
                    inputField.value = ""; // Clear the input if it's 0 or less
                    charLimitMessage.textContent = "Please enter a value greater than 0.";
                    myButton.disabled = true; // Disable the button
                } else if (inputField.value > 10) {
                    inputField.value = 10; // Set the value to 10 if it's greater
                    charLimitMessage.textContent = "Maximum value is 10.";
                    myButton.disabled = true; // Disable the button
                } else {
                    charLimitMessage.textContent = "";
                    myButton.disabled = false; // Disable the button
                }
        }

        // Modal for display hours
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('myButton');
        var span = document.getElementById('closeModalBtn');
        var modalContent = document.getElementById('modalContent');

        btn.onclick = function() {
            var attendanceData = @json(session('attendanceData', null));
            if (attendanceData) {
                modalContent.innerHTML = attendanceData;
                modal.style.display = 'block';
                setTimeout(function() {
                    modal.style.display = 'none';
                }, 3000);
            }
        }
        span.onclick = function() {
            modal.style.display = 'none';
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</x-app-layout>
