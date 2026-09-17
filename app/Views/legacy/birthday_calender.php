  <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: "Poppins", sans-serif;
            color: #25282d;
        }

        .birthday-section {
            width: 100%;
            padding: 55px 0 70px;
        }

        .main-container {
            width: 94%;
            max-width: 1500px;
            margin: auto;
        }

        /* MAIN HEADING */

        .section-title {
            text-align: center;
            margin-bottom: 65px;
        }

        .section-title h1 {
            margin: 0;
            font-size: 40px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            line-height: 1.3;
            color: #cf5700;
        }

        .title-line {
            width: 100px;
            height: 5px;
            margin: 18px auto 0;
            border-radius: 50px;
            background: linear-gradient(90deg, #ef5145, #f39a19);
        }

        /* MAIN BOX */

        .birthday-wrapper {
            background: #ffffff;
            border: 1px solid #e2e2e2;
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        }

        .month-heading {
            font-size: 40px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            line-height: 1.3;
            margin: 0 0 28px;
            color: #25282d;
        }

        /* BIRTHDAY CARDS */

        .birthday-item {
            position: relative;
            height: 100%;
            background: #ffffff;
            border-radius: 20px;
            padding: 15px;
            border: 1px solid #eeeeee;
            box-shadow: 0 7px 22px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .birthday-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
        }

        .birthday-image-box {
            width: 100%;
            height: 255px;
            overflow: hidden;
            border-radius: 15px;
            background: #fafafa;
        }

        .birthday-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .date-badge {
            position: absolute;
            top: 25px;
            left: 25px;
            padding: 7px 13px;
            background: #e8f5ff;
            color: #0078bd;
            border-radius: 9px;
            font-size: 1rem;
            font-weight: 700;
            z-index: 2;
        }

        .days-badge {
            position: absolute;
            top: 213px;
            right: 25px;
            padding: 7px 13px;
            background: #e5354a;
            color: #ffffff;
            border-radius: 9px;
            font-size: 1rem;
            font-weight: 600;
            z-index: 2;
        }

        .birthday-name {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 14px 0 2px;
            color: #202328;
        }

        .birthday-born {
            margin: 0;
            font-size: 1rem;
            color: #555555;
        }

        /* CALENDAR */

        .calendar-card {
            width: 100%;
            height: 100%;
            background: #ffffff;
            border-radius: 20px;
            padding: 24px;
            border: 1px solid #eeeeee;
            box-shadow: 0 7px 22px rgba(0, 0, 0, 0.08);
        }

        .calendar-top {
            width: 100%;
            display: table;
            margin-bottom: 25px;
        }

        .calendar-top-left,
        .calendar-title-area,
        .calendar-top-right {
            display: table-cell;
            vertical-align: middle;
        }

        .calendar-top-left {
            width: 65px;
        }

        .calendar-top-right {
            width: 65px;
            text-align: right;
        }

        .calendar-title-area {
            text-align: center;
        }

        .calendar-title {
            margin: 0;
            font-size: 1.45rem;
            font-weight: 500;
            color: #202020;
            white-space: nowrap;
        }

        .calendar-button {
            width: 51px;
            height: 51px;
            border: none;
            border-radius: 50%;
            background: #176ff2;
            color: #ffffff;
            font-size: 31px;
            line-height: 1;
            cursor: pointer;
            transition: 0.25s ease;
        }

        .calendar-button:hover {
            background: #075bd0;
            transform: scale(1.06);
        }

        /* WEEK DAYS */

        .week-row {
            width: 100%;
            display: flex;
            margin: 0;
        }

        .week-day {
            width: 14.285714%;
            flex: 0 0 14.285714%;
            text-align: center;
            font-size: 1rem;
            font-weight: 500;
            color: #222222;
            padding: 8px 2px;
        }

        /* CALENDAR DATES */

        .calendar-days {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin: 0;
        }

        .calendar-cell {
            width: 14.285714%;
            flex: 0 0 14.285714%;
            padding: 4px;
        }

        .calendar-date {
            width: 100%;
            height: 45px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 400;
            color: #111111;
            cursor: default;
            transition: 0.25s ease;
        }

        .calendar-date.empty {
            visibility: hidden;
        }

        /* BIRTHDAY DATE - SAME STYLE AS SCREENSHOT */

        .calendar-date.has-birthday {
            background: #c9e8f8;
            color: #111111;
            font-weight: 500;
            cursor: pointer;
            border-radius: 9px;
        }

        .calendar-date.has-birthday:hover {
            background: #a9d9f1;
            transform: translateY(-2px);
        }

        /* SELECTED DATE */

        .calendar-date.selected-date {
            background: #b8def2;
            color: #111111;
        }

        /* SELECTED BIRTHDAY */

        .selected-birthday {
            margin-top: 20px;
            padding: 15px;
            border-radius: 12px;
            background: #f8fbfd;
            border: 1px solid #dbeaf2;
            display: none;
        }

        .selected-birthday h6 {
            margin: 0 0 5px;
            font-size: 1rem;
            font-weight: 700;
            color: #1673b7;
        }

        .selected-birthday p {
            margin: 0;
            font-size: 1rem;
            color: #555555;
        }

        /* NO BIRTHDAY */

        .no-birthday {
            min-height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 30px;
            border-radius: 18px;
            background: #fafafa;
            border: 1px dashed #dddddd;
        }

        .no-birthday h4 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .no-birthday p {
            margin: 0;
            font-size: 1rem;
            color: #888888;
        }

        /* ALL MEMBERS */

        .all-members-section {
            margin-top: 75px;
        }

        .all-members-title {
            text-align: center;
            margin-bottom: 55px;
        }

        .all-members-title h2 {
            margin: 0;
            font-size: 40px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            color: #cf5700;
            line-height: 1.3;
        }

        .members-title-line {
            width: 100px;
            height: 5px;
            margin: 18px auto 0;
            border-radius: 50px;
            background: linear-gradient(90deg, #ef5145, #f39a19);
        }

        .member-card {
            height: 100%;
            background: #ffffff;
            border-radius: 15px;
            padding: 12px;
            border: 1px solid #eeeeee;
            box-shadow: 0 6px 17px rgba(0, 0, 0, 0.07);
            transition: all 0.3s ease;
        }

        .member-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.11);
        }

        .member-image {
            width: 58px;
            height: 58px;
            object-fit: contain;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .member-name {
            margin: 0 0 3px;
            font-size: 18px !important;
            font-weight: 0 !important;
            color: #171717;
        }

        .member-date {
            margin: 0;
            font-size: 1rem;
            color: #444444;
        }

        /* MONTH ANIMATION */

        .month-content {
            animation: monthFade 0.35s ease;
        }

        @keyframes monthFade {

            from {
                opacity: 0;
                transform: translateX(18px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }

        }

        /* RESPONSIVE */

        @media (max-width: 1199px) {

            .birthday-wrapper {
                padding: 25px;
            }

            .month-heading {
                font-size: 36px;
            }

            .birthday-image-box {
                height: 220px;
            }

            .calendar-card {
                padding: 20px;
            }

            .calendar-date {
                height: 43px;
            }

        }

        @media (max-width: 991px) {

            .birthday-section {
                padding-top: 40px;
            }

            .section-title {
                margin-bottom: 45px;
            }

            .birthday-wrapper {
                padding: 22px;
            }

            .month-heading {
                font-size: 34px;
            }

            .birthday-image-box {
                height: 250px;
            }

            .calendar-card {
                margin-top: 25px;
            }

            .calendar-date {
                height: 52px;
            }

        }

        @media (max-width: 767px) {

            .main-container {
                width: 94%;
            }

            .birthday-section {
                padding: 35px 0 55px;
            }

            .section-title h1 {
                font-size: 40px;
            }

            .birthday-wrapper {
                padding: 17px;
                border-radius: 18px;
            }

            .month-heading {
                font-size: 30px;
                margin-bottom: 20px;
            }

            .birthday-image-box {
                height: 270px;
            }

            .calendar-card {
                padding: 15px;
                border-radius: 18px;
            }

            .calendar-title {
                font-size: 1.2rem;
            }

            .calendar-button {
                width: 45px;
                height: 45px;
                font-size: 27px;
            }

            .calendar-top-left,
            .calendar-top-right {
                width: 55px;
            }

            .week-day {
                font-size: 0.9rem;
            }

            .calendar-date {
                height: 48px;
                font-size: 0.95rem;
            }

            .all-members-title h2 {
                font-size: 34px;
            }

        }

        @media (max-width: 575px) {

            .main-container {
                width: 92%;
            }

            .section-title {
                margin-bottom: 35px;
            }

            .section-title h1 {
                font-size: 40px;
            }

            .title-line,
            .members-title-line {
                width: 80px;
                height: 4px;
            }

            .birthday-wrapper {
                padding: 13px;
            }

            .month-heading {
                font-size: 26px;
            }

            .birthday-item {
                padding: 10px;
            }

            .birthday-image-box {
                height: 240px;
            }

            .date-badge,
            .days-badge {
                top: 19px;
                font-size: 0.8rem;
                padding: 6px 9px;
            }

            .date-badge {
                left: 19px;
            }

            .days-badge {
                right: 19px;
            }

            .birthday-name {
                font-size: 1.1rem;
            }

            .birthday-born {
                font-size: 1rem;
            }

            .calendar-top {
                margin-bottom: 18px;
            }

            .calendar-title {
                font-size: 1.05rem;
            }

            .calendar-button {
                width: 40px;
                height: 40px;
                font-size: 24px;
            }

            .calendar-top-left,
            .calendar-top-right {
                width: 45px;
            }

            .week-day {
                font-size: 0.72rem;
                padding: 5px 0;
            }

            .calendar-cell {
                padding: 2px;
            }

            .calendar-date {
                height: 40px;
                border-radius: 8px;
                font-size: 0.85rem;
            }

            .calendar-date.has-birthday {
                border-radius: 8px;
            }

            .all-members-section {
                margin-top: 55px;
            }

            .all-members-title {
                margin-bottom: 35px;
            }

            .all-members-title h2 {
                font-size: 28px;
            }

            .member-image {
                width: 52px;
                height: 52px;
            }

            .member-name {
                font-size: 1rem;
            }

            .member-date {
                font-size: 0.9rem;
            }

        }

        @media (max-width: 400px) {

            .section-title h1 {
                font-size: 32px;
            }

            .month-heading {
                font-size: 23px;
            }

            .birthday-image-box {
                height: 210px;
            }

            .calendar-title {
                font-size: 0.95rem;
            }

            .calendar-button {
                width: 36px;
                height: 36px;
                font-size: 21px;
            }

            .calendar-top-left,
            .calendar-top-right {
                width: 40px;
            }

            .week-day {
                font-size: 0.62rem;
            }

            .calendar-date {
                height: 36px;
                font-size: 0.75rem;
            }

            .date-badge,
            .days-badge {
                font-size: 0.7rem;
            }

        }

    </style>
<section class="birthday-section">

    <div class="main-container">

        <div class="section-title">

            <h1>Birthday Calendar &amp; Reminders</h1>

            <div class="title-line"></div>

        </div>


        <div class="birthday-wrapper">

            <div id="monthContent" class="month-content">

                <div class="row g-4">

                    <!-- BIRTHDAYS -->

                    <div class="col-12 col-lg-8">

                        <h2
                            class="month-heading"
                            id="monthHeading">
                            Birthdays in August 2026
                        </h2>

                        <div class="birthday-list">

                            <div
                                class="row g-4"
                                id="birthdayCards">
                            </div>

                        </div>

                    </div>


                    <!-- CALENDAR -->

                    <div class="col-12 col-lg-4">

                        <div class="calendar-card">

                            <div class="calendar-top">

                                <div class="calendar-top-left">

                                    <button
                                        type="button"
                                        class="calendar-button"
                                        id="previousMonth"
                                        aria-label="Previous month">
                                        &#8592;
                                    </button>

                                </div>


                                <div class="calendar-title-area">

                                    <h3
                                        class="calendar-title"
                                        id="calendarMonth">
                                        August 2026
                                    </h3>

                                </div>


                                <div class="calendar-top-right">

                                    <button
                                        type="button"
                                        class="calendar-button"
                                        id="nextMonth"
                                        aria-label="Next month">
                                        &#8594;
                                    </button>

                                </div>

                            </div>


                            <!-- WEEK DAYS -->

                            <div class="week-row">

                                <div class="week-day">Sun</div>
                                <div class="week-day">Mon</div>
                                <div class="week-day">Tue</div>
                                <div class="week-day">Wed</div>
                                <div class="week-day">Thu</div>
                                <div class="week-day">Fri</div>
                                <div class="week-day">Sat</div>

                            </div>


                            <!-- CALENDAR DATES -->

                            <div
                                class="calendar-days"
                                id="calendarDays">
                            </div>


                            <div
                                class="selected-birthday"
                                id="selectedBirthday">
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ALL MEMBERS -->

        <div class="all-members-section">

            <div class="all-members-title">

                <h2>All Members Birthday Card</h2>

                <div class="members-title-line"></div>

            </div>


            <div
                class="row g-3"
                id="allMembers">
            </div>

        </div>

    </div>

</section>

<script>

    const members = [

        {
            name: "Akhil",
            day: 29,
            month: 7,
            year: 1996,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person1.png"
        },

        {
            name: "Sneha",
            day: 10,
            month: 7,
            year: 2002,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person1.png"
        },

        {
            name: "Akhil",
            day: 28,
            month: 7,
            year: 1996,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person2.png"
        },

        {
            name: "Sneha",
            day: 31,
            month: 7,
            year: 2002,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person1.png"
        },

        {
            name: "Akhil",
            day: 30,
            month: 7,
            year: 1996,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person2.png"
        },

        {
            name: "Sita",
            day: 5,
            month: 0,
            year: 1990,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person2.png"
        },

        {
            name: "Rahul",
            day: 21,
            month: 0,
            year: 1989,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person2.png"
        },

        {
            name: "Priya",
            day: 14,
            month: 1,
            year: 1992,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person2.png"
        },

        {
            name: "Vikram",
            day: 28,
            month: 1,
            year: 1994,
            image: "https://ksandbox.in/diocese2/public/assets/images/birthday/person2.png"
        }

    ];


    const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];


    let currentMonth = 7;
    let currentYear = 2026;


    const monthHeading =
        document.getElementById("monthHeading");

    const calendarMonth =
        document.getElementById("calendarMonth");

    const birthdayCards =
        document.getElementById("birthdayCards");

    const calendarDays =
        document.getElementById("calendarDays");

    const selectedBirthday =
        document.getElementById("selectedBirthday");


    function getBirthdayStatus(member) {

        const today = new Date();

        today.setHours(0, 0, 0, 0);

        const birthday = new Date(
            currentYear,
            member.month,
            member.day
        );

        birthday.setHours(0, 0, 0, 0);

        const difference = Math.round(
            (today - birthday) /
            (1000 * 60 * 60 * 24)
        );


        if (difference > 0) {

            if (difference === 1) {
                return "1 day ago";
            }

            return difference + " days ago";

        }


        if (difference === 0) {
            return "Today";
        }


        const futureDays =
            Math.abs(difference);


        if (futureDays === 1) {
            return "Tomorrow";
        }


        return "In " + futureDays + " days";

    }


    function getMonthMembers() {

        return members.filter(function(member) {

            return member.month === currentMonth;

        });

    }


    function renderBirthdayCards() {

        birthdayCards.innerHTML = "";

        const monthMembers =
            getMonthMembers();


        if (monthMembers.length === 0) {

            birthdayCards.innerHTML = `

                <div class="col-12">

                    <div class="no-birthday">

                        <div>

                            <h4>No birthdays this month</h4>

                            <p>
                                There are no birthdays recorded
                                for ${monthNames[currentMonth]}.
                            </p>

                        </div>

                    </div>

                </div>

            `;

            return;

        }


        monthMembers.forEach(function(member) {

            const status =
                getBirthdayStatus(member);


            birthdayCards.innerHTML += `

                <div class="col-12 col-md-6 col-xl-4">

                    <div class="birthday-item">

                        <span class="date-badge">

                            ${member.day}
                            ${monthNames[currentMonth].substring(0, 3)}

                        </span>


                        <span class="days-badge">

                            ${status}

                        </span>


                        <div class="birthday-image-box">

                            <img
                                src="${member.image}"
                                alt="${member.name}"
                                class="birthday-image">

                        </div>


                        <h3 class="birthday-name">

                            ${member.name}

                        </h3>


                        <p class="birthday-born">

                            Born ${member.year}

                        </p>

                    </div>

                </div>

            `;

        });

    }


    function renderCalendar() {

        calendarDays.innerHTML = "";

        selectedBirthday.style.display = "none";

        selectedBirthday.innerHTML = "";


        calendarMonth.textContent =
            monthNames[currentMonth] +
            " " +
            currentYear;


        monthHeading.textContent =
            "Birthdays in " +
            monthNames[currentMonth] +
            " " +
            currentYear;


        const firstDay =
            new Date(
                currentYear,
                currentMonth,
                1
            ).getDay();


        const totalDays =
            new Date(
                currentYear,
                currentMonth + 1,
                0
            ).getDate();


        const monthMembers =
            getMonthMembers();


        /* EMPTY CELLS */

        for (let i = 0; i < firstDay; i++) {

            calendarDays.innerHTML += `

                <div class="calendar-cell">

                    <div class="calendar-date empty">
                    </div>

                </div>

            `;

        }


        /* DATES */

        for (
            let day = 1;
            day <= totalDays;
            day++
        ) {

            const birthdayPeople =
                monthMembers.filter(function(member) {

                    return member.day === day;

                });


            const hasBirthday =
                birthdayPeople.length > 0;


            let classes =
                "calendar-date";


            if (hasBirthday) {

                classes += " has-birthday";

            }


            const peopleNames =
                birthdayPeople
                    .map(function(person) {

                        return person.name;

                    })
                    .join(", ");


            calendarDays.innerHTML += `

                <div class="calendar-cell">

                    <div
                        class="${classes}"
                        ${
                            hasBirthday
                            ? `onclick="showBirthday(${day})"`
                            : ""
                        }
                        title="${peopleNames}">

                        ${day}

                    </div>

                </div>

            `;

        }

    }


    function showBirthday(day) {

        const birthdayPeople =
            getMonthMembers().filter(function(member) {

                return member.day === day;

            });


        if (birthdayPeople.length === 0) {
            return;
        }


        let html = `

            <h6>
                Birthday on
                ${day}
                ${monthNames[currentMonth]}
            </h6>

        `;


        birthdayPeople.forEach(function(member) {

            html += `

                <p>

                    <strong>
                        ${member.name}
                    </strong>

                    — Born ${member.year}

                </p>

            `;

        });


        selectedBirthday.innerHTML = html;

        selectedBirthday.style.display = "block";


        document
            .querySelectorAll(".calendar-date")
            .forEach(function(date) {

                date.classList.remove("selected-date");

            });


        const allDates =
            document.querySelectorAll(".calendar-date");


        allDates.forEach(function(date) {

            if (date.textContent.trim() == day) {

                date.classList.add("selected-date");

            }

        });

    }


    function changeMonth(direction) {

        currentMonth += direction;


        if (currentMonth < 0) {

            currentMonth = 11;

            currentYear--;

        }


        if (currentMonth > 11) {

            currentMonth = 0;

            currentYear++;

        }


        const content =
            document.getElementById("monthContent");


        content.style.animation = "none";

        void content.offsetWidth;

        content.style.animation =
            "monthFade 0.35s ease";


        renderBirthdayCards();

        renderCalendar();

    }


    document
        .getElementById("previousMonth")
        .addEventListener(
            "click",
            function() {

                changeMonth(-1);

            }
        );


    document
        .getElementById("nextMonth")
        .addEventListener(
            "click",
            function() {

                changeMonth(1);

            }
        );


    function renderAllMembers() {

        const allMembers =
            document.getElementById("allMembers");


        allMembers.innerHTML = "";


        members.forEach(function(member) {

            const month =
                monthNames[member.month]
                    .substring(0, 3);


            allMembers.innerHTML += `

                <div
                    class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

                    <div class="member-card">

                        <div
                            class="d-flex align-items-center gap-3">

                            <img
                                src="${member.image}"
                                alt="${member.name}"
                                class="member-image">


                            <div>

                                <h4 class="member-name">

                                    ${member.name}

                                </h4>


                                <p class="member-date">

                                    ${member.day}
                                    ${month}
                                    ${member.year}

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            `;

        });

    }


    renderBirthdayCards();

    renderCalendar();

    renderAllMembers();

</script>

