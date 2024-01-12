<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/calendar.css') }}">
    <title>Calendar Event</title>
</head>
<body>
    <div class="content">
        <div class="top">
            <div class="top__calendar-scale">
                <button id="openSidebar" class="medium-button">
                    <img src="{{url('images/menu.svg')}}" alt="menu icon" class="button-image">
                </button>

                <div id="scale" class="dropdown">
                    <div class="dropdown__current" title="dropdown">
                        <div class="dropdown__icon-text">
                            <img src="{{url('images/calendar.svg')}}" alt="" class="dropdown__icon">
                            <span class="dropdown__text">3 days</span>
                        </div>
                        <img src="{{url('images/open.svg')}}" alt="" class="dropdown__toggle">
                    </div>
                    <div class="dropdown__options-wrapper">
                        <ul class="dropdown__options">
                            <li class="dropdown__option" scale="3d">3 days</li>
                            <li class="dropdown__option" scale="7d">Week</li>
                            <li class="dropdown__option" scale="1m">Month</li>
                            <li class="dropdown__option" scale="3m">3 months</li>
                            <li class="dropdown__option" scale="1y">Year</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period__current">
                    <button id="returnToCurrentDate" class="small-button" title="Return to current date">
                        <img src="{{url('images/return.svg')}}" alt="Current date" class="button-image">
                    </button>
                    <p class="period__text"></p>
                </div>

                <div class="period__change-period">
                    <button id="back" class="small-button">
                        <img src="{{url('images/back.svg')}}" alt="Back" class="button-image">
                    </button>
                    <button id="forward" class="small-button">
                        <img src="{{url('images/forward.svg')}}" alt="Forward" class="button-image">
                    </button>
                </div>
            </div>

            <button id="displayEventsInList" class="medium-button" title="Display events as a list">
                <img src="{{url('images/list.svg')}}" alt="List view" class="button-image">
            </button>
        </div>

        <div class="sidebar">
            <button id="closeSidebar" class="medium-button">
                <img src="{{url('images/menu.svg')}}" alt="Open panel" class="button-image">
            </button>

            <div class="side-calendar">
                <div class="side-calendar__month">
                    <div class="side-calendar__change-period">
                        <button id="sideCalendarBack" class="small-button">
                            <img src="{{url('images/back.svg')}}" alt="Back" class="button-image">
                        </button>
                        <p class="side-calendar__text"></p>
                        <button id="sideCalendarForward" class="small-button">
                            <img src="{{url('images/forward.svg')}}" alt="Forward" class="button-image">
                        </button>
                    </div>
                </div>
                <div class="side-calendar__dates">
                </div>
            </div>

            <div class="sidebar__add">
                <button id="addEvent" class="text-button">
                    <img src="{{url('images/add.svg')}}" alt="" class="text-button__image">
                    <p class="text-button__text">Add Event</p>
                </button>
                <button id="addTask" class="text-button">
                    <img src="{{url('images/task.svg')}}" alt="" class="text-button__image">
                    <div class="text-button__add-task-text">
                        <p class="text-button__text">Add Task</p>
                    </div>
                </button>
            </div>

            <div class="sidebar__checkbox-group">
                <input type="checkbox" id="importantEvents" class="sidebar__checkbox" eventtype="red-events" checked>
                <label for="importantEvents" class="sidebar__checkbox-label"><span class="sidebar__checkbox-button"></span>Important Events</label>
            </div>
            <div class="sidebar__checkbox-group">
                <input type="checkbox" id="nonUrgentEvents" class="sidebar__checkbox" eventtype="blue-events" checked>
                <label for="nonUrgentEvents" class="sidebar__checkbox-label"><span class="sidebar__checkbox-button"></span>Non-Urgent Events</label>
            </div>
            <div class="sidebar__checkbox-group">
                <input type="checkbox" id="creativeEvents" class="sidebar__checkbox" eventtype="purple-events" checked>
                <label for="creativeEvents" class="sidebar__checkbox-label"><span class="sidebar__checkbox-button"></span>Creative Events</label>
            </div>
            <div class="sidebar__checkbox-group">
                <input type="checkbox" id="healthAndEarningsEvents" class="sidebar__checkbox" eventtype="green-events" checked>
                <label for="healthAndEarningsEvents" class="sidebar__checkbox-label"><span class="sidebar__checkbox-button"></span>Health and Earnings</label>
            </div>
            <div class="sidebar__checkbox-group">
                <input type="checkbox" id="entertainmentEvents" class="sidebar__checkbox" eventtype="orange-events" checked>
                <label for="entertainmentEvents" class="sidebar__checkbox-label"><span class="sidebar__checkbox-button"></span>Entertainment</label>
            </div>
            <div id="lastCheckboxGroup" class="sidebar__checkbox-group">
                <input type="checkbox" id="holidays" class="sidebar__checkbox" eventtype="azure-events" checked>
                <label for="holidays" class="sidebar__checkbox-label"><span class="sidebar__checkbox-button"></span>Holidays</label>
            </div>

            <div class="add-event__input-group add-event__input-group_country">
                <span class="add-event__placeholder add-event__placeholder_country">Your Country Code</span>
                <input id="country" type="text" class="add-event__input" autocomplete="off">
                <button id="setCountry" class="small-button">
                    <img src="{{url('images/check-mark.svg')}}" alt="" class="button-image">
                </button>
            </div>
        </div>

        <div class="calendar">
            <div class="days">
            </div>
            <div class="calendar__year">
                <p class="calendar__year-text"></p>
            </div>
        </div>

        <div class="content__shade-area"></div>
    </div>

    <div class="add-event-popup">
        <div class="add-event-popup__shade-area"></div>
        <div class="add-event">
            <div class="add-event__content">
                <p class="add-event__header">Add Event</p>
                <button id="closePopup" class="small-button">
                    <img src="{{url('images/closing-cross.svg')}}" alt="Close" class="button-image">
                </button>

                <div class="add-event__input-group">
                    <span id="eventNamePlaceholder" class="add-event__placeholder">Event Name</span>
                    <input id="eventName" type="text" class="add-event__input" autocomplete="off">
                </div>
                <div class="add-event__input-group">
                    <span id="eventDescriptionPlaceholder" class="add-event__placeholder">Event Description</span>
                    <input id="eventDescription" type="text" class="add-event__input" autocomplete="off">
                </div>

                <div id="eventType" class="dropdown">
                    <div class="dropdown__current">
                        <div class="dropdown__icon-text">
                            <span class="dropdown__color"></span>
                            <div class="dropdown__header-text">
                                <span id="eventTypeHeader" class="dropdown__header">Event Type</span>
                                <span class="dropdown__text">Important Events</span>
                            </div>
                        </div>
                        <img src="{{url('images/open.svg')}}" alt="" class="dropdown__toggle">
                    </div>
                    <div class="dropdown__options-wrapper">
                        <ul class="dropdown__options">
                            <li class="dropdown__option">
                                <span class="dropdown__color red-events"></span>
                                <p>Important Events</p>
                            </li>
                            <li class="dropdown__option">
                                <span class="dropdown__color blue-events"></span>
                                <p>Non-Urgent Events</p>
                            </li>
                            <li class="dropdown__option">
                                <span class="dropdown__color purple-events"></span>
                                <p>Creative Events</p>
                            </li>
                            <li class="dropdown__option">
                                <span class="dropdown__color green-events"></span>
                                <p>Health and Earnings</p>
                            </li>
                            <li class="dropdown__option">
                                <span class="dropdown__color orange-events"></span>
                                <p>Entertainment</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="add-event__input-group add-event__input-group_time">
                    <span id="eventTimeHeader" class="add-event__input-header">Event Time</span>
                    <div class="add-event__time-group">
                        <input id="eventHours" type="number" class="add-event__input add-event__input_time" placeholder="00">
                        <span class="add-event__colon">:</span>
                        <input id="eventMinutes" type="number" class="add-event__input add-event__input_time" placeholder="00">
                    </div>
                </div>

                <div class="add-event__input-group add-event__input-group_time">
                    <span id="eventDateHeader" class="add-event__input-header">Event Date</span>
                    <div class="add-event__time-group">
                        <input id="eventDay" type="number" class="add-event__input add-event__input_time" placeholder="00">
                        <span class="add-event__colon add-event__dot">.</span>
                        <input id="eventMonth" type="number" class="add-event__input add-event__input_time" placeholder="00">
                        <span class="add-event__colon add-event__dot">.</span>
                        <input id="eventYear" type="number" class="add-event__input add-event__input_time add-event__input_year" placeholder="0000">
                    </div>
                </div>

                <div class="add-event__change-event">
                    <button id="createEvent" class="text-button">
                        <img src="{{url('images/add.svg')}}" alt="" class="text-button__image">
                        <p class="text-button__text">Create Event</p>
                    </button>

                    <button id="deleteEvent" class="add-event__delete-event" title="Delete Event">
                        <img src="{{url('images/delete.svg')}}" alt="Delete" class="button-image">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('assets/js/calendar.js') }}"></script>
</body>
</html>
