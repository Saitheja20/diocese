<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


        <?php include __DIR__ . '/header.php'; ?>



    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Barlow Condensed", sans-serif;
            background: #f6f8fb;
            color: #222;
        }

        .education-section {
            width: 100%;
            padding: 70px 15px;
            overflow: hidden;
        }

        .education-wrapper {
            width: min(1200px, 100%);
            margin: auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            margin: 0;
            font-size: clamp(30px, 4vw, 46px);
            font-weight: 700;
            color: #17365d;
            letter-spacing: 1px;
        }

        .section-title p {
            margin-top: 8px;
            color: #777;
            font-size: 18px;
        }

        /* CATEGORY BUTTONS */

        .category-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 45px;
        }

        .category-btn {
            border: 1px solid #17365d;
            background: #fff;
            color: #17365d;
            padding: 11px 22px;
            border-radius: 6px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .category-btn:hover,
        .category-btn.active {
            background: #17365d;
            color: #fff;
        }

        .category-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }

        /* SCHOOL CARD */

        #schoolContainer {
            width: 100%;
        }

        .school-card {
            width: 100%;
            display: flex;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            min-height: 330px;
        }

        .school-image {
            width: 33%;
            min-height: 330px;
            overflow: hidden;
        }

        .school-image img {
            width: 100%;
            height: 100%;
            min-height: 330px;
            display: block;
            object-fit: cover;
        }

        .school-content {
            width: 67%;
            padding: 30px;
        }

        .school-title {
            margin: 0 0 20px;
            font-size: clamp(24px, 2.5vw, 32px);
            line-height: 1.15;
            font-weight: 700;
            color: #17365d;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px 25px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .info-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .info-text {
            min-width: 0;
        }

        .info-label {
            display: block;
            color: #777;
            font-size: 15px;
            line-height: 1.1;
            margin-bottom: 3px;
        }

        .info-value {
            display: block;
            color: #222;
            font-size: 17px;
            line-height: 1.25;
            word-break: break-word;
        }

        .history-button {
            margin-top: 25px;
            background: #17365d;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 22px;
            font-size: 17px;
            transition: 0.3s ease;
        }

        .history-button:hover {
            background: #0e2745;
            color: #fff;
        }

        /* EMPTY */

        .empty-message {
            text-align: center;
            padding: 50px 20px;
            background: #fff;
            border-radius: 10px;
            color: #777;
            font-size: 20px;
        }

        /* MODAL */

        .history-modal .modal-content {
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .history-modal .modal-header {
            background: #17365d;
            color: #fff;
            padding: 18px 25px;
        }

        .history-modal .modal-title {
            font-size: 26px;
            font-weight: 700;
        }

        .history-modal .btn-close {
            filter: brightness(0) invert(1);
        }

        .history-modal .modal-body {
            padding: 30px;
            font-size: 18px;
            line-height: 1.7;
            color: #444;
        }

        /* TABLET */

        @media (max-width: 991px) {

            .education-section {
                padding: 55px 15px;
            }

            .school-card {
                min-height: 300px;
            }

            .school-image {
                width: 38%;
                min-height: 300px;
            }

            .school-image img {
                min-height: 300px;
            }

            .school-content {
                width: 62%;
                padding: 25px;
            }

            .info-grid {
                gap: 15px;
            }

            .school-title {
                font-size: 27px;
            }
        }

        /* MOBILE */

        @media (max-width: 767px) {

            .education-section {
                padding: 45px 12px;
            }

            .category-buttons {
                gap: 9px;
                margin-bottom: 30px;
            }

            .category-btn {
                padding: 9px 15px;
                font-size: 16px;
            }

            .school-card {
                display: block;
                min-height: auto;
            }

            .school-image {
                width: 100%;
                height: 260px;
                min-height: 260px;
            }

            .school-image img {
                width: 100%;
                height: 260px;
                min-height: 260px;
            }

            .school-content {
                width: 100%;
                padding: 22px;
            }

            .school-title {
                font-size: 26px;
                margin-bottom: 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .history-button {
                width: 100%;
            }
        }

        @media (max-width: 480px) {

            .education-section {
                padding: 35px 10px;
            }

            .section-title h2 {
                font-size: 31px;
            }

            .section-title p {
                font-size: 16px;
            }

            .category-buttons {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .category-btn {
                width: 100%;
                padding: 10px 7px;
                font-size: 15px;
            }

            .school-image {
                height: 230px;
                min-height: 230px;
            }

            .school-image img {
                height: 230px;
                min-height: 230px;
            }

            .school-content {
                padding: 18px;
            }

            .school-title {
                font-size: 24px;
            }

            .info-value {
                font-size: 16px;
            }

            .history-modal .modal-body {
                padding: 20px;
                font-size: 17px;
            }
        }

        @media (max-width: 360px) {

            .category-buttons {
                grid-template-columns: 1fr;
            }

            .school-title {
                font-size: 22px;
            }

            .info-icon {
                width: 36px;
                height: 36px;
                min-width: 36px;
            }
        }
    </style>
</head>

<body>

<section class="education-section">

    <div class="education-wrapper">

        <div class="section-title">
            <h2>EDUCATION INSTITUTES</h2>
            <p>Diocese of Warangal</p>
        </div>

        <!-- CATEGORY BUTTONS -->

        <div class="category-buttons">

            <button class="category-btn active" data-category="primary">
                Primary School
            </button>

            <button class="category-btn" data-category="upper">
                Upper Primary School
            </button>

            <button class="category-btn" data-category="high">
                High Schools
            </button>

            <button class="category-btn disabled" data-category="college">
                Colleges
            </button>

            <button class="category-btn" data-category="technical">
                Technical School
            </button>

            <button class="category-btn" data-category="training">
                Training Institute
            </button>

        </div>

        <!-- SCHOOL CONTAINER -->

        <div id="schoolContainer"></div>

    </div>

</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>


<script>

const iconImages = {

    formed:
        "https://ksandbox.in/diocese2/public/assets/images/icons/est-icon.jpg",

    place:
        "https://ksandbox.in/diocese2/public/assets/images/icons/church-icon.jpg",

    address:
        "https://ksandbox.in/diocese2/public/assets/images/icons/place-icon.jpg",

    principal:
        "https://ksandbox.in/diocese2/public/assets/images/icons/vicar-icon.jpg",

    managed:
        "https://ksandbox.in/diocese2/public/assets/images/icons/managment-icon2.jpg",

    phone:
        "https://ksandbox.in/diocese2/public/assets/images/icons/phone-icon.jpg"
};


/* =========================================================
   INSTITUTES
========================================================= */

const institutes = [

/* =========================================================
   PRIMARY SCHOOLS
========================================================= */

{
    category: "primary",
    name: "Auxilium English Medium School (1997)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1997",
    place: "Yellapur, Hasanparthy, Warangal",
    address: "H.M. / Correspondent Auxilium English medium school Yellapur P.O., Hasanparthy mdl. Warangal Dt. -506371",
    principal: "Sr. Phliomena Fernadez",
    managed: "Salesian Sisters of Don Fernandez",
    phone: "",
    history: `Auxilium English medium school was started in 1997. The people of Yellapur and neighbouring villages are poor and illiterate. The people of these villages expressed the need for a school to most rev. Thumma Bala. The Bishop invited the Salesian Sisters of Don Bosco to start a school at Seethampet cross road, Hasanparthy mandal from the academic year 1997-1998. Sr. Ruby kora, F.M.A., the then provincial, made the arrangements to a school. At present, it has kindergarten and classes I & IV and it being up-graded year by year. The school was blessed and integrated by bishop Thumma Bala on 27th july, 1999. Aims at the integral growth of the children after the example of Don Bosco and Mother Mazzarella, the founder and Co-fundress of the Congregation. Method followed is the preventive system of Don bosco, which isan effective means of reaching the goal.`
},

{
    category: "primary",
    name: "Fatima Primary School (T.M.) (1956)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1956",
    place: "Monugonda, Dharmaram, Warangal",
    address: "Fatima Primary School Monugonda (P.O.) Via: Dharmaram Warangal Dt. - 506 330",
    principal: "Sr. D. Catherine, FMM",
    managed: "Franciscan Missionaries of Mary",
    phone: "(0870) 2844201",
    history: `The school was established on 11th June 1956 by Franciscan Missionaries of Mary during Most Rev. Alphonsus Beretta. It provides quality education and all-round formation to catholic and non-catholic poor rural children. From 1956 to 2000, 13 Sisters served as Headmistresses. About 1497 students have studied in the school, of whom 173 are Catholics.`
},

{
    category: "primary",
    name: "Fusco’s English Medium School (1998)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1998",
    place: "Wardhannapet, Warangal",
    address: "Fusco’s English Medium School Wardhannapet (P.O.) Warangal Dt. - 506 313",
    principal: "Sr. Celestina / Sr. Fathima Mary",
    managed: "Sisters of St. John the Baptist",
    phone: "(08711) 241493",
    history: `Most Rev. Thumma Bala invited the Sisters of St. John the Baptist to Wardhannapet for educational, catechetical, social work and women’s development. The school started on June 12 1998. Sr. Lucy Kallarackal was the Delegate Superior.`
},

{
    category: "primary",
    name: "Hanson’s Residential School (T.M)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "",
    place: "Karunapuram, Peddapendiyal, Warangal",
    address: "Hansen's Residential School, Karunapuram, Peddapendiyal (P.O) Warangal Dt :- 506 051",
    principal: "Sr. Lilly Mathew, MIMM",
    managed: "The Mationaries of Mary Mediatrix",
    phone: "",
    history: `The school was established in 1987 by Fr. Augusto Colombo, PIME, to educate leprosy affected children along with treatment. It was later handed over to the Missionaries of Mary Mediatrix Sisters at Karunapuram when Sr. Ann Narikattu was Delegate Superior. There are about 300 students, including 50 Catholics.`
},

{
    category: "primary",
    name: "Little Flower School (2001)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "2001",
    place: "Pasara, Warangal",
    address: "Little Flower School Pasara (P.O.) Warangal Dt. - 506 347",
    principal: "Sr. Veronica / Sr. Roset Luka",
    managed: "Missionary Sisters of Mary Help of Christians",
    phone: "",
    history: `The school was started on June 11 2001 at the invitation of Most Rev. Thumma Bala by Regional Superior Sr. Ivy Joseph. Sr. Rosaline George was the first Headmistress.`
},

{
    category: "primary",
    name: "Mary Mediatrix E.M. School (1997)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1997",
    place: "Suraipally, Manthani, Karimnagar",
    address: "Mary Mediatrix School Suraipally (Vill), Manthani (P.O.) Karimnagar Dt.- 505 184",
    principal: "Sr. Valsamma Michael / Sr. Gracy Varghese",
    managed: "Missionaries of Mary Mediatrix",
    phone: "",
    history: `The school was established on 12 June 1997 through the initiative of Most Rev. Thumma Bala and then Regional Superior Sr. Theresa Thomas. The building was blessed and inaugurated by Bishop Thumma Bala on 16 Jan 1997. Its aim is sound moral, intellectual, social and physical education. Fr. M.P. Joseph helped in the construction.`
},

{
    category: "primary",
    name: "Mission School",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "",
    place: "Sagaram, Wardhanapet, Warangal",
    address: "Mission School Sagaram Vill & P.O Wardhanapet (Mdll) Warangal Dt :- 506 313",
    principal: "Sr. Theresamma",
    managed: "Catechist Sister of St. Ann",
    phone: "",
    history: `We’re sorry, but the history of the school is currently unavailable.`
},

{
    category: "primary",
    name: "Sacred Heart E.M. School (1998)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1998",
    place: "Tharalapally, Kazipet, Warangal",
    address: "Sacred Heart School Tharalapally (P.O.),Via Kazipet Warangal Dt. - 506 003",
    principal: "Sr. Vijaya",
    managed: "Sisters of our Lady of Fatima",
    phone: "",
    history: `The school was started in 1998 at the invitation of Most Rev. Thumma Bala. Regional Superior Sr. Florence Fernandes was involved in the initiative. The purpose was to develop poor and rural children through education. Late Rev. Fr. Antonello, PIME, P.P. Kazipet was instrumental in the land and building.`
},

{
    category: "primary",
    name: "Bl. Alphonsa’s School (1978)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1978",
    place: "Reddipuram, Pegadapally, Warangal",
    address: "Bl. Alphonsa’s School Reddipuram (Vill.), Pegadapally (P.O.) Warangal Dt. - 506 371",
    principal: "Sr. Fathima",
    managed: "Society of St. Anne, Guntur",
    phone: "",
    history: `The school was started on 20 June 1978 during Most Rev. Alphonsus Beretta and Superior General Rev. Sr. Margaret Mary. Its purpose was to provide academic and religious education to poor and rural children, with special reference to Catholic children.`
},

{
    category: "primary",
    name: "St. Alphonsu’s School (T.M) (1965)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1965",
    place: "Ragunathpally, Warangal",
    address: "St. Alphonsa’s School Ragunathpally, (P.O.) Warangal Dt. - 506 224",
    principal: "Sr. V. Arogyam",
    managed: "Catechist Sister of St.Ann",
    phone: "",
    history: ""
},

{
    category: "primary",
    name: "St. Ann’s (E.M.) School (1997)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1997",
    place: "Mariapuram, Narimetta, Warangal",
    address: "St. Ann’s English Medium School Mariapuram Vill. Narsapur (P.O.), Narimetta (Mdl.) Warangal Dt. - 506 224",
    principal: "Sr. Beena / Sr. Celine",
    managed: "Society of St. Anne, Guntur",
    phone: "",
    history: `The school was started in 1997 at Mariapuram at the request of the people and with the support of Most Rev. Thumma Bala. Superior General Sr. Ignatius Loyola of Society of St. Anne, Guntur was involved. It was blessed and inaugurated on 17 June 1997.`
},

{
    category: "primary",
    name: "St. Francis School (2002)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "2002",
    place: "Veleru, Madikonda, Warangal",
    address: "St.Francis School Veleru P.O., Via Madikonda Warangal Dt. - 506 142",
    principal: "Fr. D. Vijaya Paul Reddy / Sr. Victoria",
    managed: "Warangal Diocesan Society",
    phone: "(08719) 250970",
    history: `St. Francis Kindergarten started in the academic year 2002-03 at Veleru by the Diocese in collaboration with Presentation Sisters. It was co-educational from LKG to 2nd grade as an experimental programme for 2–3 years. Its purpose was to serve rural and tribal children. Fr. G. Prakash was the first Correspondent. It aimed at Christian presence and reaching rural and tribal communities, with education as a means of evangelisation and service.`
},

{
    category: "primary",
    name: "St. JOHN’S (E.M.) SCHOOL (2002)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "2002",
    place: "Dhanasari, Kesamudram, Warangal",
    address: "St. John’s School Dhanasari (Vill), Kesamudram (Mdl) Warangal Dt. - 506 112",
    principal: "Fr. T. Pradeep Reddy",
    managed: "Warangal Diocesan Society",
    phone: "",
    history: `The school started in the academic year 2002-03 at Dhanasari village by the Diocese in memory of the Golden Jubilee. It was co-educational from LKG to 2nd grade. Fr. R. Inna was the first H.M. & Correspondent. The school aimed at Christian presence and reaching rural and tribal communities. The building was blessed and inaugurated on 5 Dec 2002 by Most Rev. Thumma Bala with the Presbytery.`
},

{
    category: "primary",
    name: "St. Joseph’s (E.M.) School (1997)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1997",
    place: "Vadlur, Thotappalli, Karimnagar",
    address: "St. Joseph’s School Vadlur (P.O.) Thotappalli Via Karimnagar Dt. - 505 530",
    principal: "Sr. Flora",
    managed: "St. Franciscan Sister of Aloysius De Gonzague",
    phone: "",
    history: `The school opened in 1998 at Mallakapally by Provincial Sr. Bernadette Pinto of Sisters of St. Joseph of Cluny at the invitation of Most Rev. Thumma Bala. It provides academic and moral education to rural children in justice, equality and concern for the poor.`
},

{
    category: "primary",
    name: "St. Joseph’s (T.M.) School (1998)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1998",
    place: "Mallakapally, Kazipet, Warangal",
    address: "St. Joseph’s Primary School Mallakapally (P.O.) Via Kazipet Warangal Dt. - 506 003",
    principal: "Rev. Sr. Philomena Peter",
    managed: "Sisters of St. Joseph of Cluny",
    phone: "",
    history: `The T.M. Primary School opened in 1998 at Mallakapally by Sr. Bernadette Pinto, Provincial of the Sisters of St. Joseph of Cluny, at the invitation of Most Rev. Thumma Bala.`
},

{
    category: "primary",
    name: "St. JOSEPH’S E.M. SCHOOL (1999)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1999",
    place: "Jyothinagar, Husnabad, Karimnagar",
    address: "St. Joseph’s School Jyothinagar, Husnabad (P.O.) Karimnagar Dt.- 505 417",
    principal: "Fr. D. Sudhakar",
    managed: "Warangal Diocesan Society",
    phone: "",
    history: `The Diocese established the school in 1999 for the educational needs of the area. It began in sheds for about two years and later the school was constructed on the present 20-acre site. It has classes up to 5th standard with a strength of 391 students. It aims at the all-round development of children. Fr. Y. Joji was instrumental in obtaining the land and starting the school.`
},

{
    category: "primary",
    name: "St. MARK’S (T.M.) SCHOOL (1954)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1954",
    place: "Gunturupally, Narimetta, Jangaon",
    address: "St.Mark’s School Gunturupally (Vil) Narimetta (P.O.) Jangaon Via Warangal Dt. - 506 167",
    principal: "Sr. P. Robert",
    managed: "Catechist Sisters of St. Ann",
    phone: "",
    history: `The school was established in 1954 by Catechist Sisters of St. Ann at the request of Most Rev. Alphonsus Beretta. Its purpose was to educate Catholic children in the surrounding Catholic villages.`
},

{
    category: "primary",
    name: "St. MARY’S (E.M.) SCHOOL (1999)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1999",
    place: "Ranipuram, Kothapally, Karimnagar",
    address: "St. Mary’s School Ranipuram (Vill), Kothapally P.O. Karimnagar Dt. - 505 451",
    principal: "Sr. Sailaja / Sr. Nirmala",
    managed: "Seva Missionary Sisters of our Lady",
    phone: "",
    history: `Most Rev. Thumma Bala invited the Sisters of Seva Missionaries of Mary to open the first Convent and School at Ranipuram. It was opened in 1999 with the motto of direct evangelization and education.`
},

{
    category: "primary",
    name: "St. THERESA’S E.M. SCHOOL (1999)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1999",
    place: "Atmakur, Warangal",
    address: "St. Theresa’s School Atmakur (P.O.) Warangal Dt. - 506 342",
    principal: "Sr. Vimala Mary / Sr. Jane Mary",
    managed: "Sisters of the Adoration of the Blessed Sacrament",
    phone: "",
    history: ""
},

{
    category: "primary",
    name: "St. Vincent Pallotti (E.M.) School (2002)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "2002",
    place: "Shanigaram, Regulapalli, Karimnagar",
    address: "St. Vincent Pallotti School Shanigaram, Regulapalli (Vill.) Karimnagar Dist.- 505 528",
    principal: "Sr. Beena / Sr. Celine",
    managed: "St. Vincent Pallotti Congregation",
    phone: "",
    history: `The school started in 2001 by Provincial Lillia Cappretti on the request of Most Rev. Thumma Bala. It aims at all-round formation, with special reference to Catholics.`
},

{
    category: "primary",
    name: "JYOTHI ENGLISH MEDIUM SCHOOL (2010)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "2010",
    place: "Parkal, Warangal",
    address: "Jyothi E/M School, Bhoopalapally Road, Parkal 506 164, Warangal (Dt)",
    principal: "Sr. Joice Maria S.D. / Sr. Maria Rose .S.D.",
    managed: "Sisters of the Destitute",
    phone: "",
    history: `Many private English-medium schools in Parkal were aimed at money. Villagers approached the Diocese and the Bishop saw the need to open a school. It was opened in 2010 to provide better education to poor children in Parkal and surrounding villages.`
},

{
    category: "primary",
    name: "ST. JOHN DE BRITTO HIGH SCHOOL",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "",
    place: "Kadavendi, Warangal",
    address: "St. John De Britto High School Kadavendi - 506302, Warangal District",
    principal: "Fr. T. Antony Joseph, SVD",
    managed: "Fathers of SVD Society",
    phone: "",
    history: `At the request of poor and marginalized people of Kadavendi and nearby villages, Fr. Antony Samy SVD established the school in 2003. Its aim was to eradicate ignorance, proclaim the Gospel and form communities. Construction was helped by a donation from Fr. John Schubert SVD in Japan.`
},

{
    category: "primary",
    name: "ST. ANTHONY’S HIGH SCHOOL",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "",
    place: "Dharmasagar, Warangal",
    address: "St. Anthony’s High School Dharmasagar Village & Post, Via: Madikonda Warangal District - 506142",
    principal: "S. Leena Mary",
    managed: "Franciscan Sisters of the Immaculate Heart of Mary",
    phone: "",
    history: `The school was invited by Most Rev. Thumma Bala and the people of Dharmasagar. The English Medium school was inaugurated on 09.06.2009. Provincial Superior S. Anselm Theresa and S. Tiburcia Mary were instrumental. The purpose was to educate poor children, bring their potentials to light and move from ignorance to knowledge, for Catholics and non-Catholics.`
},

{
    category: "primary",
    name: "NOTRE DAME HIGH SCHOOL",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "",
    place: "Theegarajupally, Sangem, Warangal",
    address: "Notre Dame E.M. School, Theegarajupally, Sangem (M), Warangal - 506310",
    principal: "SN. Mary Daisy. SND / Sr. Mary Ranjana Joseph, SND",
    managed: "Sisters of Notre Dame (Visitation Province, Bangalore)",
    phone: "",
    history: `The school started in 2007 with 20 students at Teegarajupally. At the request of Most Rev. Bishop Thumma Bala, the Sisters of Notre Dame Visitation Province Bangalore, especially Provincial Sn. Mary Gayanti, took keen interest in serving less privileged and backward children. Its motto is “story to god, service to all”. It provides quality education and extracurricular activities, discipline and character formation. It began from nursery to III with the dream of becoming a fully-fledged high school.`
},

{
    category: "primary",
    name: "ST. MARY’S SCHOOL (2007)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "2007",
    place: "Dantalapally, Narasimhulapet, Warangal",
    address: "St. Mary’s School, Dantalapally, Narasimhulapet Mdl, Warangal",
    principal: "Fr. Sagar Jose IMS / Sr. Divya Maria CMC",
    managed: "The Indian Missionary Society",
    phone: "",
    history: `Dantalapally is on the Warangal-Khammam Road, 72 km from Warangal city, in Thorrur Parish. It is a backward rural area where people are poor and mostly uneducated farmers. The school was started by the Indian Missionary Society with Sisters of Mother of Carmel in 2007 to provide standard English-medium education at an affordable cost. It follows Gospel values and gives preference to downtrodden and oppressed children with fee concessions. It began from Nursery–III in 2007 and aimed to upgrade to X; it is currently up to V. The first Correspondent and HM continue.`
},


/* =========================================================
   UPPER PRIMARY SCHOOLS
========================================================= */

{
    category: "upper",
    name: "Prasentation Upper Primary School (1998)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/Carmel-Integrate-school2.jpg",
    formed: "1998",
    place: "Warangal",
    address: "H.M/Correspondent,Presentation Upper Primary School,Cherial Village & P.O,Warangal Dt. - 506 223",
    principal: "Sr. Shyni Thomas/Sr. Jessy Thomas",
    managed: "Daughters of Presentation of Mary in the Temple",
    phone: "(08710) 222512",
    history: `Presentation Primary School was started on 15th June, 1998 by Sr. Lorenza, the Regional Superior of the Presentation Sisters at Cherial at the ivnitation of Most Rev. Thumma Bala. There are 5 Sisters who are rendering their services at Cherial. About 450 students are studying in this school. It was established with the purpose of educating rural catholic and non-catholic children.`
},

{
    category: "upper",
    name: "Sacred Heart Upper Primary School (1992)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/Carmel-Integrate-school2.jpg",
    formed: "1992",
    place: "Warangal",
    address: "H.M./Correspondent Sacred Heart U.P. Primary School, Kanchanapally, Vil, Via Raghunathpalli, Warangal Dt. - 506 244",
    principal: "Sr. Lucy/Sr. Arogya",
    managed: "Catechist Sisters of St. Ann",
    phone: "(08716) 230647",
    history: `St. Joseph’s Girls’ Vocational Training Centre was started at Kumarapally with the consent of Most Rev. Thumma Bala, D.D. by Catechist Sisters of St. Ann in the Year 1992. It offers four trades. 1. Cutting and Tailoring; 2. Typing and Stenography; 3. Electronics (Mechanism T.V. & Radio); 4. Computers. This Institution is recognised by the State Government since 1992 and affiliated to the National Council for Vocational Training- Delhi as I.T.I.`
},

{
    category: "upper",
    name: "St.Theresa’ s U . P School(T . M) (1950)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/Carmel-Integrate-school2.jpg",
    formed: "1950",
    place: "Warangal",
    address: "H.M/Correspondent,Presentation St.Theresa’ s U . P School(T . M) Thimmaraopet(P . O), Chennaraopet Mandal, Warangal Dt . -506 332",
    principal: "Sr. Monica",
    managed: "Catechist Sister of St.Ann",
    phone: "(08716) 230647",
    history: `St. Theresa’s Upper Primary School aims at imparting quality education both to catholic and non-catholic children in the rural area. It was established in 1950 by C.S.A. Sisters, when our former Bishop Most Rev. Alphonsus Beretta was the Bishop of Hyderabad and Sr. Enrichetta was the Mother General. There is a boarding attached to the school. Bishop Thumma Bala inaugurated the new school building on 31st July, 1998.`
},


/* =========================================================
   HIGH SCHOOLS
========================================================= */

{
    category: "high",
    name: "ASSISI HIGH SCHOOL (1973)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1973",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `ASSISI HIGH SCHOOL (1973) Assisinagar and its surrounding area, known as Kasibugga of Mill Colony, was a slum area on the outskirts of Warangal Town, then. To educate the poor children who could not go to any school due to poverty, Bishop A. Beretta requested the then Provincial Baptistina Taverneni to open a school in 1973 at Assisinagar. The school was established with classes I-VII. Subsequently on the public demand, the school was up-graded to class X. It has grant-in-aid till standard VIII. The institution gives books & uniform to the poor children free of cost. Free education is given to the needy. Besides the school subjects, the students are grounded in value education based upon the principles of the Gospel. Catechism is taught regularly to all the catholic students.`
},

{
    category: "high",
    name: "BISHOP BERETTA E.M. HIGH SCHOOL (1990)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1990",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Bishop Beretta School (E.M.) was started by Most Rev. Thumma Bala at Fatimanagar in 1990. The primary aim is to provide education in English Medium to the Diocesan Catholic Children at an affordable cost. It was named so in recognition of the valuable services for 33 years of late Rt. Rev. Alphonsus Beretta, the first Bishop of Warangal. It began in the residential quarters on the road side at Fatimanagar. Later, the school was shifted in 1995 to the new building, which was built beside the B.Ed. College. It was blessed and inaugurated by Most Rev. Thumma Bala on 18th September 1995. The school was up-graded into high school. Owing to the growing strength, a separate building for Kindergarten was built in 2000 in memory of late Fr. Massimo, Milan, financially helped by his parents, Erika Bignetti & Piero Cappretti, Venegono Superiore, Italy through the instrumentality of Fr. T.Augustine, the then H.M. & Correspondent. Due to the increasing demand, a third section was opened in June 2001.`
},

{
    category: "high",
    name: "CARMEL CONVENT SCHOOL (1993)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1993",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Carmel Convent Integrated School for visually handicapped is yet another initiative of Most Rev.Thumma Bala. Sr. Alfreda, the then Regional Superior, came forward to open this school. It was started on 5th July 1993. Fr. Matthew Manayathumary,MSFS, the then Parish Priest of Elukaturthy, was instrumental in paving the way forward to this school. There is also boarding facility for the children. The boarding was built in 1997 and it was blessed by Bishop Thumma Bala on 1st Jan. 1998. The new school building was blessed by Bishop Thumma Bala on 7th June, 1999.At present we have 75 children in the boarding and out of them 36 are visually challenged receiving free education.The children are being moulded in the hands of the sisters who try to impart moral education through their dedicated service`
},

{
    category: "high",
    name: "DON BOSCO ENGLISH MEDIUM SCHOOL (1993)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1993",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Don Bosco School at Mariapuram was started in the year 1993. Every year, one class was added to the existing ones. The school aims at all round development of students from all strata of life in the Society. Academic success is the constant aim of the classroom. But more important than the academic success is the building up of character. Honesty, truthfulness, integrity and piety are inculcated in the children by the well-regulated discipline. Moral instruction, which is essencial for character formation, is imparted to all the pupils.`
},

{
    category: "high",
    name: "FATIMA GIRLS T.M. & E.M. HIGH SCHOOL (1953)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1953",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `To promote women’s development, Most Rev. Alphonsus Beretta invited Franciscan Missionaries of Mary to open an educational institution for girls and to take up pastoral and social work. The then Provincial Mother Rymond Lulla sent a group of FMM Sisters in June 1953 to Fatimanagar. In the same year, they opened Fatima Girls’ School in huts and sheds with fifty orphans in a forest-like area. It deserves to mention that this was the first educational institution in Fatimanagar. Under the able guidance of Mother Clemens, the superior of the Mission, the Mother Jean Louis, the principal, with the help of Bro. Sala, the architect and builder, completed the new school building in 1958. In its long history of service, nearly 11,250 catholic girls were educated out of 35,284 students.It is interestisng to note that this was the first longest building in Warangal Town, then. The school is committed to impart qulaity education along with extra curricular activities such as singing, dancing, quiz, dramatizing, social service etc. Character formation is given prime importance.`
},

{
    category: "high",
    name: "FATIMA ENGLISH MEDIUM HIGH SCHOOL (1980)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1980",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Fatima School, English Medium, was established in 1980 by the Catechist Sisters of St. Ann during the time of Most Rev. Alphonsus Beretta and Rev. Sr. Celestine Gali, the then Superior General. Fr. Y. Sebastian, the then Parish Priest here, was intrumental in procuring the land in its initial stage. The main purpose of establishing this institution is to impart quality education to the tribal children in the surrounding areas of Mahabubabad. Owing to the selfless services of many Sisters, the school grew up, meeting the needs of the Society. Thus so far, 1100 students studied & left the portals of Fatima, of whom 60 are Catholics. In course of time, it turned into an instrument of christian witness and service to the tribals. The present school building was inaugurated by Bishop Thumma Bala on 1st February 1995.`
},

{
    category: "high",
    name: "GANDHI CENTENARY GIRLS’ TELUGU MEDIUM HIGH SCHOOL (1967)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1967",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Gandhi Centenary T.M.High School was started in the year 1967 by Catechist Sisters of St. Ann at Lourdunagar during the time of Most Rev. Alphonsus Beretta and Rev. Sr. Enrichetta, the then Mother General.

The Main purpose of establishing the school is to impart good education and all-round formation of the poor children of Karimnagar District. As a result of the services of many Sisters, who worked in this institution, adequate progress has been made towards fulfilling this objective. There were about 3,518 students who have studied so far in this school and 1,875 among them are Catholics.`
},

{
    category: "high",
    name: "LITTLE FLOWER HIGH SCHOOL FOR THE DEAF AND DUMP (1990)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1990",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the request of Most Rev. Thumma Bala, the Provincial, Sr. Celestine Francis, of Assisi Sisters of Mary Immaculate of Sacred Heart Province started this school for deaf and dumb on 6th August 1990. The boarding was blessed on 3rd July, 1994 and new school building was blessed and inaugurated on 21st September 1995 by Bishop Thumma Bala.

The main purpose of this institution is to give education to the hearing impaired children in the area of Warangal Diocese. This is the first and the only catholic educational institution which serves the deaf and dumb children in Warangal Diocese.`
},

{
    category: "high",
    name: "LITTLE FLOWER E. M. HIGH SCHOOL (June 26th, 1994)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "June 26th, 1994",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Little Flower School was started on June 26th, 1994 at the invitation of Most Rev. Thumma Bala by Sr. Elsa Puthenpuraka, the Provincial of Tezpur, Assam. Fr. A. Prakash was instrumental in procuring the land and in getting the Sisters.The purpose of establishing this school is to serve and bear witness to Christ through the apostolate of education. It imparts moral, social cultural and academic studies to the children. The needy children, both catholics and non-catholics are given concessions and free education.`
},

{
    category: "high",
    name: "LOYOLA T.M. HIGH SCHOOL (1980)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1980",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the invitation of Most Rev. Alphonsus Beretta, of Mr. K.S. Shrarma, the District Collector of Karimnagar and of the People of the locality, Fr. Elias Arockiasamy, SJ, was delegated in 1980 to venture on establishing a school. Later, Fr. William Thomas joined him to pave the way for opening of Loyola High School at Lourdunagar in the buildings provided by the Diocese. In 1985, the school was shifted to Rekurthy. Besides academic excellence and discipline, the school is known for the extra curricular activities such as literacy programmes for nearby villages. The purpose of this school is to impart education to the poor village children, making them knowledgeable and wise citizens of India. It aims to form children to be the leaders in all walks of life and will serve their fellow men in Justice and truth. Hostel facility is provided for the students coming from distant places.`
},

{
    category: "high",
    name: "MARIA RANI T.M. HIGH SCHOOL & Primary School E.M. (1991 & 1999)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1991 & 1999",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Maria Rani School, Telugu Medium, was established on 12th June 1991 at Karunapuram with the encouragement of Most Rev. Thumma Bala and at the initiative of Rev. Sr. Anne Narikattu, the then Delegate Superior. Bishop Thumma Bala blessed Mariarani boarding home on 3rd July, 1993 and new school building on 6th July, 1996.

The main aim of this institution is to focus on the promotion of education of the underprivileged female children and the upliftment of the women folk. It provides educational opportunity and all-round formation for girls. The school has boarding facility. It provides good opportunity to the children from the neighbouring villages.Maria Rani E/M was established on 12th June 1999.The present school building was inagurated by bishop Thumma Bala on 22nd Agust 2008.`
},

{
    category: "high",
    name: "MOUNT CARMEL E.M. HIGH SCHOOL (1996)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1996",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.`
},

{
    category: "high",
    name: "NIRMALA E.M. & T.M. HIGH SCHOOL (1966)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1966",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `This Institution was established in June, 1966 by Nirmala Sisters at Dornakal at the request of Most Rev. Alphonsus Beretta. Rev. Sr. Rita Maggioni was the then Regional Superior of Region. The primary purpose of establishing this institution was to impart quality education and all-round formation to both catholic and non-catholic students of Dornakal Town, especially to the children of railway employees. It has both English & Telugu Media. With the services of several Headmistresses and the Staff, the school has steadily grown to the present status. The present school building was blessed and inaugurated by Bishop Thumma Bala on 29th June, 1996.`
},

{
    category: "high",
    name: "NIRMALA HIGH SCHOOL (T.M.) (1978)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1978",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Shantinagar and its surrounding villages in Karimnagar District are socially and economically backward with a less number of christian population. Literacy was at the lowest percentage. Becoming aware of the situation and in order to uplift the people, on the invitation of late Most Rev. alphonsus Beretta, the Bishop of Warangal then, Sr. Carla Reboldi, the then Regional Superior of the Missionary Sisters of the Immaulate, started Nirmala Primary School at Shanthinagar in 1978. In 1999 it was up-graded into a High School.`
},

{
    category: "high",
    name: "ROSA MYSTICA CONVENT SCHOOL (1993)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1993",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the request of A.P.Rayons and at the invitation of Bishop Thumma Bala, Sisters of the Congregation of Carmelite Religious opened a Convent at Kamalapuram in 1992 to run & manage the Thapar Vidya Vihar, owned by the A.P. Rayons. A year later, they opened an independent school by name Rosa Mystica Convent School in the Church Compound at Kamalapuram on 13th June 1993. Sr. Mary Euphrecia, Regional Superior at the time of its establishment, took a lot of initiative in realizing the project.The aim of the school is to provide educational service to this most backward mission tribal & forest area of the Diocese.`
},

{
    category: "high",
    name: "SACRED HEART GIRLS’ T.M. & E.M. HIGH SCHOOL (1966)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1966",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `This institution was established in the year 1966 by F.M.M. Sisters at Godavarikhani during the time of Most Rev. Alphonsus Beretta and Rev. Sr. Mary Law, the Provincial, at that time. The main purpose of establishing this institution was to impart good education and all-round formation both to catholic and non-catholic children of the employees of Singareni Coal Mines. From June, 1966 to 1978, the school remained as a upper primary school and in 1979 it was up-graded to high school. 5,000 students have studied in the school so far and 600 of them are Catholics.`
},

{
    category: "high",
    name: "ST. ALPHONESE\"S HIGH SCHOOL (1986)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1986",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Alphone’s High School (T.M) was started as a tutorial school in August, 1986 by Warangal Diocesan Society during the time of Msgr.K.Joseph, the then Administrator of the Diocese. Later in March 1987, Bishop Bala made a serious study of the viability of running a regular school mainly to educate the catholic children. Having received a positive report, the Diocese established this school from VI to IX at a time. The same year, the school, got the approval of the Govt. of A.P.Fr.B.Anthony was the first Correspondent. An attached boarding for boys was opened simultaneously Fr.Basani Prakash was appointed the first Director of the boarding. He also taught regularly in the school. In 1992 a primary section T.M. was opened, hoping to serve the needs of the rural children. The main purpose of establishing this institution was to accommodate the catholic boys of the Diocese and to impart quality education in the light of gospel values. As there was no strength in the primary section, it had to be closed down in a few year’s time. In 1998, English Medium was started to meet the growing local needs. The new School block for this English medium was inaugurated and blessed by Bishop Thumma Bala on 10th July, 1999

Till date, 900 students received S.S.C. Certificates from the School of whom 300 were Catholics. It has to be noted that the Jesuits ran Loyola high school in these premises earlier for some time.`
},

{
    category: "high",
    name: "ST. ANN’S GIRLS’ HIGH SCHOOL T.M (1933)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1933",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Ann’s School is one of the oldest schools in the Diocese. It was established in the year 1933 by Catechist Sisters of St. Ann as a primary school with the support of Most Rev. Vismara, PIME, the then Bishop of Hyderabad.
The main purpose of establishing this school is to impart quality education and all-round development both to catholic and non-catholic girls of this rural area. Living up to its motive and purpose, this school has served to 6,594 rural catholic girls and boys out of 9,496 that passed through the school, so far.`
},

{
    category: "high",
    name: "ST. ANN’S GIRLS’ E.M. HIGH SCHOOL (1993)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1993",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `Rev. Fr. L. Delissandri, PIME, the then Parish Priest of Appannapeta, seeing the educational needs of the people of Pedapalli town and surrounding villages, bought the land, constructed the school building in the year 1993 and invited Sisters of St. Ann of Provindence with the permission of Bishop Thumma Bala. They opened a school in June, 1993. The school’s objective is to provide quality education on christian principles to children and youth.`
},

{
    category: "high",
    name: "St.AUGUSTINE’S HIGH SCHOOL (E.M.) (1994)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1994",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the Invitation of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial Sr. Fatima, F.C.C., estabilished St. Augustine’s School in 1994 at Maripeda. The School is situated in the rural area, where most of the people are tribals and illiterate. Fr. M.P. Joseph has been instumental to get the land, in getting Sisters and in all the constructions there. The purpose of this school is to bring the people / children out of their ignorance and also proclaim the Good News through the medium of education.`
},

{
    category: "high",
    name: "St. FRANCIS DE SALES HIGH SCHOOL (E.M.) (1995)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1995",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `The S.F.S. School was started in June 1995 under the patronage of Most Rev. Thumma Bala and Rev. Fr. Mani Panthalani, MSFS, Provincial of the Visakhapatnam Province of the Missionaries of St. Francis de Sales for the purpose of Mission Work, for Christian Presence and influence through education apostolate. It is for the spiritual and all-round upliftment of the rural and remote population eventually.`
},

{
    category: "high",
    name: "St. JOHN’S HIGH SCHOOL ( E.M.) (1963)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1963",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. John’s E.M. School was established in 1963 by Catechist Sisters of St. Ann at the invitation of Most Rev. Alphonsus Beretta and during the time Sr. Enrichetta, the then Mother General. At first, it was started in Thukkarao’s Compound as a primary school. Later in 1967, the school was shifted to the present site, Lourdunagar. Gradually, it was up-graded into a High School.
The main purpose of establishing this institution is to impart good education and all-round formation to both catholic and non-catholic students through English Medium. Till today, 8000 students have been educated, of whom 2500 are Catholics.`
},

{
    category: "high",
    name: "St Anthony's High School(T . M) (1990)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1990",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Anthony’s School was established on 21st June, 1993 by the Franciscan Sisters of the Immaculate Heart of Mary, on the invitation of Most Rev. Thumma Bala, Bishop of Warangal. The Provincial Superior, Sr.Arogya Mary, and Sr. Irudhaya Mary, the first Headmistress, were instrumental in opening this institution. The main Purpose of establishing this school is to impart good education to the rural children of this locality and give all-round formation both to Catholics and non-Catholics. The school building was blessed and inaugurated by Bishoip Thumma Bala on 18th January 1999.`
},

{
    category: "high",
    name: "St Anthony’ s High School(E . M) (1986)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1986",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Anthony’s E.M School for boys and girls is 8kms from Karimnagar on Karimnagar-Hyderabad Highway. It was started by one Boyapati Showreddy, a Catholic, in 1986. Keeping in view of the needs of the catholic children of Karimnagar, Most Rev. Thumma Bala purchased the school together with the land in June 1990. Ever since, it is being managed by the Warangal Diocesan Society. Gradually, the school was up-graded to SSC with boarding facilities for boys. So far, five batches of X class and 10 batches of VII class passed successfully from the school.

The boarding was blessed by Bishop Thumma Bala on 11th April, 1997. The school surmounted the difficulties of acute water scarcity and poor financial position due to low fee structure. There was scarcity and poor financial position due to low fee structure. There was a time when the Management gave notice to the parents that the school was going to be shifted to the premises of St.Alphone’s High School in Karimnagar Town. The realization of the needed co-operation from the parents and timely water source and Fr.Joji’s able & proper handling as correspondent, saved the situation.`
},

{
    category: "high",
    name: "St. CLAIRE E.M.CONVENT SCHOOL (1984)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1984",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Claire Convent School was started with the encouragement of Most Rev. A.Beretta and the effort of Sr. Sophia Pais, the Provincial of FMM in 1984 at NTPC, Ramagundam. The main purpose of taking up this school is to give education to the children of Employees there and to the poor children of this locality.
This Institution will be taken over by the Society of Divine Word Missionaries from May/June 2003.`
},

{
    category: "high",
    name: "St.Gabriel’ s High School(T . M & E . M) (1985)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1985",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Gabriel’s High School T.M & E.M for Boys, Fathimanagar, is a Minority Institution established by Provincial Rev. Bro. Louis Beaureau of the Society of the Brothers of St. Gabriel in June. 1995 at the invitation of most Rev. Alphonsus Beretts. The Diocese handed-over the land and existing structures in the campus to the Brothers of St.Gabriel’s. It is one of the first educational institutions established at Fathimanagar & also in the Diocese of Warangal after its erection and also to commemorate the centenary celebrations of All Saint’s High School, Hyderabad. Bro .Vincent was its founder Principal. The school, initially, had only from class VI both in English & Telugu media. A Primary section was added in 1977 at the initiative of Bro. Berchmans, the then principal St.Gabriel’s school, which was exclusively for boys during the first three decades, became co-educational in June 1985 during the tenure of Bro. Alexander. Today the school has 2 sections from Classes LKG to IV and 3 sections from classes V to X English Medium and one section V to X TM. Bishop Thumma Bala and many Priests of the Diocese Studied in this school. A hostel is attached to the school, which caters to the rural population of Telangana.

In Keeping with the school’s Motto “Lead Kindly Light” , its priorities in education are not only academic excellence, but also formation of the children in discipline, hard work , moral and religious Values.`
},

{
    category: "high",
    name: "St. JOHN’S HIGH SCHOOL ( T.M.& E.M) (1982)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1982",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. John’s School was started on 14th June, 1982 on the initiative of Fr. B.Anthony, the then Parish Priest of Ookal, with the encouragement of Bishop Alphonsus Beretta. In 1986, it was handed over to the Sisters of our Lady of Fatima. Sr. Archangela Cheeran was the Superior Genera then. The main purpose of establishing this institution is to impart good education and to cater to the ever growing needs of students with high aspirations by providing opportunities both to catholic and non-catholic rural children. There were about 451 students who had, so far, successfully completed their S.S.C. Examinations. Among them 81 were Catholics.`
},

{
    category: "high",
    name: "St. JOSEPH’S GIRLS’ HIGH SCHOOL T.M./E.M (1967)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1967",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `St. Joseph’s T.M. School was started in the year 1967 by the Catechist Sisters of St. Ann, during the time of Most Rev. Alphonsus Beretta and Sr. Enrichetta, the then Mother General. English Medium was introduced in the year 1990. The primary purpose of establishing the school is to impart good education to the poor and neglected children apart from teaching catechism to catholic children.`
},

{
    category: "high",
    name: "St. PAUL’S HIGH SCHOOL (E.M) (1999)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1999",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.`
},

{
    category: "high",
    name: "ST. PAUL’S E.M. HIGH SCHOOL (1991)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1991",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.`
},

{
    category: "high",
    name: "ST. THOMAS HIGH SCHOOL E/M (1994)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1994",
    place: "",
    address: "",
    principal: "",
    managed: "",
    phone: "",
    history: `At the Invitation of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial Sr. Fatima, F.C.C., estabilished St. Augustine’s School in 1994 at Maripeda. The School is situated in the rural area, where most of the people are tribals and illiterate. Fr. M.P. Joseph has been instumental to get the land, in getting Sisters and in all the constructions there. The purpose of this school is to bring the people / children out of their ignorance and also proclaim the Good News through the medium of education.`
},

{
    category: "technical",
    name: "FATIMA INDUSTRIAL TRAINING INSTITUTION (1969)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool2.jpg",
    formed: "1969",
    place: "Fatimanagar, Warangal",
    address: "Fatima Industrial Training Centre, Fatimanagar, Warangal - 506 004",
    principal: "Bro. Antony",
    managed: "Montfort Brothers of St. Gabriel",
    phone: "",
    history: `Fatima Industrial Institute was established in Fatimanagar in the Year 1969 by Montfort Brothers of St. Gabriel at the invitation of Most Rev. Alphonsus Beretta, PIME, Bishop of Warangal. The main purpose of the this Institution was to give Job-oriented Technical Training to the Youth mainly of Warangal Diocese with a special reference to Catholics. This Vocational Training was taken up by Bro. Anthony Francisco, the then Provincial with the encouragement and support of Most Rev. Alphonsus Beretta to help immediately those who could not pursue their higher School Education and also for the poor Students.
The total number of the Students who have been trained in this Centre so far are : 946. Of these, 615 are Catholics. Indeed, it has given a great scope for the Catholic Students.`
},

{
    category: "technical",
    name: "St. JOSEPH’S INDUSTRIAL TRAINING INSTITUTE (I.T.I.) (1992)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool2.jpg",
    formed: "1992",
    place: "Kumarapalli, Hanamkonda, Warangal",
    address: "St. Joseph’s I.T.I., Kumarapalli, Hanamkonda, Warangal – 506 001",
    principal: "Sr. Theresa",
    managed: "Catechist Sisters of St. Ann",
    phone: "0870-2450274",
    history: `St. Joseph’s Girls’ Vocational Training Centre was started at Kumarapally with the consent of Most Rev. Thumma Bala, D.D. by Catechist Sisters of St. Ann in the Year 1992. It offers four trades. 1. Cutting and Tailoring; 2. Typing and Stenography; 3. Electronics (Mechanism T.V. & Radio); 4. Computers. This Institution is recognised by the State Government since 1992 and affiliated to the National Council for Vocational Training- Delhi as I.T.I.`
},

{
    category: "technical",
    name: "IMMACULATE TECHNICAL SCHOOL (1968)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool2.jpg",
    formed: "1968",
    place: "Subedari Road, Hanamkonda, Warangal",
    address: "Immaculate Convent, H.No: 1-7-641, Subedari Road, Hanamkonda, Warangal - 500 002",
    principal: "Fr. Reddem Cecilla, FMM",
    managed: "Franciscan Missionaries of Mary (FMM)",
    phone: "0870-2575436",
    history: `Immaculate Technical School was established in the year 1968 by Franciscan Missionaries of Mary at Subedari in Hanamkonda, Warangal during the time of his Lordship Alphonsus Beretta and Rev. Sr. Mary Law, the then FMM Provincial. The purpose of establishing the institute was to give Job-Oriented Technical Training to the School-dropped Young Girls and women of the locality in Needle Works, Cutting and Tailoring, Home Science, Hygiene, Gardening, etc. The Embroidery Section was temporarily discontinued for two years between 1994-96 and it got resumed again.`
},


/* =========================================================
   TRAINING INSTITUTES
========================================================= */

{
    category: "training",
    name: "BALAVIKASA INFORMATION TECHNOLOGY CENTER (ITC) (3rd June, 2000)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "3rd June, 2000",
    place: "Fatimanagar, Warangal",
    address: "Bala Vikasa Information Technology Centre, Fatimanagar, Warangal - 506 004",
    principal: "Mrs. S. Sunitha",
    managed: "Bala Vikasa",
    phone: "0870 - 2430357",
    history: `Bala Vikasa Information Technology Center is a branch of Bala Vikasa social Service Society. It was established on 3rd June, 2000. The purpose of this Center was to serve the economically poor students by the Job-Oriented Training in Advanced Courses with less tution fee. This Helps the Poor to Compete in the national/international IT Market. The Institute also aims at conducting research to make the IT benefits available to the Rural Areas, So that many rural Poor will get benefited.`
},

{
    category: "training",
    name: "DON BOSCO INDUSTRIAL TRAINING INSTITUTE (1992)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1992",
    place: "Mariapuram, Warangal",
    address: "Don Bosco Industrial Training Centre, Mariapuram, P.O. Box. 4, Warangal - 500 002",
    principal: "Fr. Joseph Abraham / Fr. M. Rayappa",
    managed: "Salesians of Don Bosco",
    phone: "-",
    history: `A Non-formal Training Centre was a real need in the Diocese for the School Drop-outs and poor Students in and around this Area. To meet this need, Bishop Thumma Bala invited Salesians of Don Bosco into the Diocese. Responding to this Invitation, Fr. Pudota Benjamin, the then Provincial of Hyderabad Salesian Province, came forward to take-up the Mission at Mariapuram in 1992. Keeping the Charism of their Founder in mind, the Salesians soon planned for a Technical Institute for the Poor Rural Youth to assert themselves as useful Citizens. It is heartening to know that after completing the Training, most of them have settled well with some job or the other. At present, there are three Trades in this Centre.`
},

{
    category: "training",
    name: "NIRMALA HANDI-CRAFT TRAINING CENTRE (1st June 1975)",
    image: "https://ksandbox.in/diocese2/public/assets/images/education/dummyschool.jpg",
    formed: "1st June 1975",
    place: "Fatimanagar, Warangal",
    address: "Nirmala Handi-craft Centre, Fatimanagar, Warangal - 506 004",
    principal: "Fr. G. Bala Martine",
    managed: "Vishwa Karuna Sangam",
    phone: "-",
    history: `Fatima Tailoring Centre was started on 1st June 1975 by Fr. Colombo, PIME. Sr. Thomasin (Presentation Congregation) was the first Principal of this Tailoring Institute. In the beginning, there were 40 Students. The main work of this Centre is teaching Embroidery, Machine-embroidery, Lace and Fabric-painting. Earlier there was even tailoring but now this is shifted to Navajeevan, Karunapuram. After 2 years of learning, they go for Government Exams and get Government Certificates, with which they easily get Jobs in Schools or they can start something privately for their livelyhood. This Institution provides Training for Self-employment to Young Girls from this locality and from surrounding Villages.`
}

];


/* =========================================================
   DISPLAY INSTITUTES
========================================================= */

function displayInstitutes(category) {

    const container = document.getElementById("schoolContainer");

    const filteredInstitutes =
        institutes.filter(item => item.category === category);

    if (filteredInstitutes.length === 0) {

        container.innerHTML = `
            <div class="empty-message" data-aos="fade-up">
                No information available.
            </div>
        `;

        AOS.refresh();

        return;
    }

    container.innerHTML = filteredInstitutes.map((school, index) => {

        const actualIndex = institutes.indexOf(school);

        const animation =
            index % 2 === 0 ? "fade-up" : "fade-down";

        return `

            <div class="school-card"
                 data-aos="${animation}"
                 data-aos-duration="900"
                 data-aos-offset="100">

                <div class="school-image">

                    <img
                        src="${school.image}"
                        alt="${school.name}"
                        loading="lazy">

                </div>

                <div class="school-content">

                    <h3 class="school-title">
                        ${school.name}
                    </h3>

                    <div class="info-grid">

                        <div class="info-item">

                            <div class="info-icon">
                                <img src="${iconImages.formed}"
                                     alt="Formed on">
                            </div>

                            <div class="info-text">
                                <span class="info-label">
                                    Formed on
                                </span>

                                <span class="info-value">
                                    ${school.formed || "-"}
                                </span>
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-icon">
                                <img src="${iconImages.place}"
                                     alt="Place">
                            </div>

                            <div class="info-text">
                                <span class="info-label">
                                    Place
                                </span>

                                <span class="info-value">
                                    ${school.place || "-"}
                                </span>
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-icon">
                                <img src="${iconImages.address}"
                                     alt="Address">
                            </div>

                            <div class="info-text">
                                <span class="info-label">
                                    Address
                                </span>

                                <span class="info-value">
                                    ${school.address || "-"}
                                </span>
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-icon">
                                <img src="${iconImages.principal}"
                                     alt="Principal">
                            </div>

                            <div class="info-text">
                                <span class="info-label">
                                    Principal/Correspondent
                                </span>

                                <span class="info-value">
                                    ${school.principal || "-"}
                                </span>
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-icon">
                                <img src="${iconImages.managed}"
                                     alt="Managed By">
                            </div>

                            <div class="info-text">
                                <span class="info-label">
                                    MANAGED BY
                                </span>

                                <span class="info-value">
                                    ${school.managed || "-"}
                                </span>
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-icon">
                                <img src="${iconImages.phone}"
                                     alt="Telephone">
                            </div>

                            <div class="info-text">
                                <span class="info-label">
                                    Telephone
                                </span>

                                <span class="info-value">
                                    ${school.phone || "-"}
                                </span>
                            </div>

                        </div>

                    </div>


                    <button
                        type="button"
                        class="history-button"
                        onclick="openHistory(${actualIndex})">

                        <i class="fa-solid fa-book-open me-2"></i>
                        View History

                    </button>

                </div>

            </div>

        `;

    }).join("");

    AOS.refreshHard();
}


/* =========================================================
   HISTORY MODAL
========================================================= */

function openHistory(index) {

    const school = institutes[index];

    if (!school) {
        return;
    }

    const oldModal =
        document.getElementById("schoolHistoryModal");

    if (oldModal) {
        oldModal.remove();
    }

    const historyText =
        school.history && school.history.trim() !== ""
            ? school.history
            : "History information is currently unavailable.";

    const formattedHistory =
        historyText
            .replace(/\n\n/g, "<br><br>")
            .replace(/\n/g, "<br>");

    const modalHTML = `

        <div class="modal fade history-modal"
             id="schoolHistoryModal"
             tabindex="-1"
             aria-hidden="true">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">
                            ${school.name}
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                        </button>

                    </div>

                    <div class="modal-body">

                        ${formattedHistory}

                    </div>

                </div>

            </div>

        </div>

    `;

    document.body.insertAdjacentHTML(
        "beforeend",
        modalHTML
    );

    const modalElement =
        document.getElementById("schoolHistoryModal");

    const modal =
        new bootstrap.Modal(modalElement);

    modal.show();

    modalElement.addEventListener(
        "hidden.bs.modal",
        function () {
            modalElement.remove();
        }
    );
}


/* =========================================================
   CATEGORY BUTTONS
========================================================= */

document.querySelectorAll(".category-btn").forEach(button => {

    button.addEventListener("click", function () {

        if (this.classList.contains("disabled")) {
            return;
        }

        document
            .querySelectorAll(".category-btn")
            .forEach(btn => {
                btn.classList.remove("active");
            });

        this.classList.add("active");

        const category =
            this.getAttribute("data-category");

        displayInstitutes(category);

        setTimeout(() => {

            const firstCard =
                document.querySelector(".school-card");

            if (firstCard) {

                const top =
                    firstCard.getBoundingClientRect().top
                    + window.pageYOffset
                    - 100;

                window.scrollTo({
                    top: top,
                    behavior: "smooth"
                });

            }

        }, 150);

    });

});


/* =========================================================
   AOS
========================================================= */

AOS.init({

    duration: 900,

    offset: 100,

    once: false,

    easing: "ease-out-cubic",

    mirror: true

});


/* =========================================================
   INITIAL CATEGORY
========================================================= */

displayInstitutes("primary");

</script>

</body>

    <?php include __DIR__ . '/footer.php'; ?>