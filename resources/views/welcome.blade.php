

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>

/* href Transition */
html {
  scroll-behavior: smooth;
  height: 100%;
}

body,
html {
  height: 100%;
  margin: 0;
  font-family: sans-serif;
  color: #666;
  text-align: center;
}
/* PARALLAX START */
.parallax1 {
  background: url("https://images.pexels.com/photos/1092063/pexels-photo-1092063.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
  min-height: 100%;
}

.parallax2 {
  background: url("https://images.pexels.com/photos/116720/pexels-photo-116720.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  min-height: 80%;
}

.parallax3 {
  background: url("https://images.pexels.com/photos/1105766/pexels-photo-1105766.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
  min-height: 60%;
}

.parallax4 {
  background: url("https://images.pexels.com/photos/116720/pexels-photo-116720.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  background-position: 0 -231px !important;
  min-height: 80%;
}

.parallax5 {
  background: url("https://images.pexels.com/photos/116720/pexels-photo-116720.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  min-height: 80%;
}

.parallax1,
.parallax2,
.parallax3,
.parallax4,
.parallax5 {
  position: relative;
  opacity: 0.7;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}

/* PARALLAX END */

.heading {
  position: absolute;
  color: white;
  font-size: 400%;
  top: 38%;
  width: 100%;
  text-transform: uppercase;
  letter-spacing: 8px;
  text-shadow: 0 0 10px black;
}

.heading-sm {
  position: absolute;
  top: 45%;
  width: 100%;
  color: white;
  font-size: 250%;
  text-transform: uppercase;
  letter-spacing: 5px;
  text-shadow: 0 0 16px black;
  text-align: center;
}

h1,
.heading {
  text-align: center;
}
.border {
  background-color: black;
  padding: 5px;
  text-align: center;
}

.two-col {
  float: left;
  width: 42%;
  padding: 0 4%;
  text-align: left;
}

#contact-header {
  background-color: #323232;
  color: white;
}

section {
  overflow: auto;
  padding: 50px 80px;
}

.section1 {
  padding: 15px 80px;
}

.dark {
  overflow: auto;
  padding: 50px 80px;
  background-color: #323232;
  color: #f2f2f2;
}

.form {
  border-radius: 7px;
  padding: 30px;
}

#form-content {
  transition: 0.5s;
}

#form-content:hover {
  -webkit-box-shadow: 0px 5px 13px 2px rgba(71, 70, 71, 0.76);
  -moz-box-shadow: 0px 5px 13px 2px rgba(71, 70, 71, 0.76);
  box-shadow: 0px 5px 13px 2px rgba(71, 70, 71, 0.76);
}

.group {
  position: relative;
  margin-bottom: 45px;
}

textarea {
  resize: none !important;
}

input,
textarea {
  background: none;
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 300px;
  border: none;
  border-bottom: 1px solid #757575;
}
input:focus,
textarea:focus {
  outline: none;
}

label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

/* active state */
input:focus ~ label,
input:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: #5264ae;
}

textarea:focus ~ label,
textarea:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: #5264ae;
}

/* BOTTOM INPUT BARS ================================= */
.bar {
  position: relative;
  display: block;
  width: 100%;
}
.bar:before,
.bar:after {
  content: "";
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #03588c;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}
.bar:before {
  left: 50%;
}
.bar:after {
  right: 50%;
}

/* active state */
input:focus ~ .bar:before,
input:focus ~ .bar:after {
  width: 50%;
}

textarea:focus ~ .bar:before,
textarea:focus ~ .bar:after {
  width: 50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position: absolute;
  height: 60%;
  width: 100px;
  top: 25%;
  left: 0;
  pointer-events: none;
  opacity: 0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

textarea:focus ~ .highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

.fixed-top {
  transition: background-color 500ms;
}

.fixed-top.scrolled {
  background-color: #fff;
  color: black;
}

@media (max-width: 768px) {
  .heading {
    font-size: 250%;
  }

  .heading-sm {
    font-size: 180%;
  }

  .two-col {
    width: 100%;
    padding: 0;
    text-align: center;
  }
  .parallax4 {
    background-attachment: scroll;
    min-height: 21%;
  }
}

.market-btn {
    display: inline-block;
    padding: 0.3125rem 0.875rem;
    padding-left: 2.8125rem;
    -webkit-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    border: 1px solid #e7e7e7;
    background-position: center left 0.75rem;
    background-color: #fff;
    background-size: 1.5rem 1.5rem;
    background-repeat: no-repeat;
    text-decoration: none;
}
.market-btn .market-button-title {
    display: block;
    color: #222;
    font-size: 1.125rem;
}
.market-btn .market-button-subtitle {
    display: block;
    margin-bottom: -0.25rem;
    color: #888;
    font-size: 0.75rem;
}
.market-btn:hover {
    background-color: #f7f7f7;
    text-decoration: none;
}
.apple-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjMmUyZTJlIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiMyZTJlMmUiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.google-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzVDREFERDsiIHBvaW50cz0iMjkuNTMsMCAyOS41MywyNTEuNTA5IDI5LjUzLDUxMiAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNCREVDQzQ7IiBwb2ludHM9IjM2OS4wNjcsMTgwLjU0NyAyNjIuMTc1LDExOS40NjcgMjkuNTMsMCAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNEQzY4QTE7IiBwb2ludHM9IjI5LjUzLDUxMiAyOS41Myw1MTIgMjYyLjE3NSwzODMuNTUxIDM2OS4wNjcsMzIyLjQ3IDI5OS4wMDQsMjUxLjUwOSAiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQ0E5NjsiIGQ9Ik0zNjkuMDY3LDE4MC41NDdsLTcwLjA2Myw3MC45NjFsNzAuMDYzLDcwLjk2MWwxMDguNjg4LTYyLjg3N2M2LjI4OC0zLjU5Myw2LjI4OC0xMS42NzcsMC0xNS4yNyAgTDM2OS4wNjcsMTgwLjU0N3oiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.windows-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMC4xNzYsMjI0TDAuMDAxLDY3Ljk2M2wxOTItMjYuMDcyVjIyNEgwLjE3NnogTTIyNC4wMDEsMzcuMjQxTDQ3OS45MzcsMHYyMjRIMjI0LjAwMVYzNy4yNDF6IE00NzkuOTk5LDI1NmwtMC4wNjIsMjI0ICAgbC0yNTUuOTM2LTM2LjAwOFYyNTZINDc5Ljk5OXogTTE5Mi4wMDEsNDM5LjkxOEwwLjE1Nyw0MTMuNjIxTDAuMTQ3LDI1NmgxOTEuODU0VjQzOS45MTh6IiBmaWxsPSIjMDBiY2YyIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.amazon-btn {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGQUJGNjhGNDRGNkMxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGQUJGNjhGMzRGNkMxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgNXCVIAAAc7SURBVHja5FwJbFRVFH0tQimgUCiubKJCWWSwKIooVhG3aESkETRqBEEEEURExBXiVhElkRiIEFwTQEHciQiIMQhFkUGFihErIJjWUgg0LFXqPf4z9jvMTOe/v9ebnEw78+//b85/y7n33T8ZNTU1yo5FIhEdtxMEXQRtBGcLOglO5ftoUKagSrBLUCLYKCgVbBEcNJ8oGo0qN+045Z2dJCgU9BdcJ2igcY4DgsWC9wTvetHoTA+u0ZlfCL3hJcFATXJgzQS3C5YIKgWT3G58hotDDMNlvmCQy9+hAj1ThtqqMPWgywXlHpADayVYKTfq0bAQdJ9guaCR8tamCUlPBZ2gcYIXlH82RUgaFlSCCgQzlf82T0hqFzSCGgreUsGxqUEj6BkKvaBYofSi5kERihCAE2z4rxYs4qp3WNBY0F0wVtBC85xNKUrnBoGgUdBTGn4IH24UbEvwGQh7TDBdMNGGQA3EELtGw2eh4Jwk5JjtAcFDmu0633clLeMcweYOi24IOLta9CnR6BF/CE4Whf2Xnz3oKg2fJzR8PtTwyaXK9nWIHbF4PFIYn2hcZ6Vm+5r4SpB039c5T5RwqO0VHE3hgoByv8alSm3oM99XsecJxSUaUXyOoKPgTOIMEjdK8xrVYSbIbIeIMsGPDp43Q/lkmap+W0bQepDTliU43oam+bM+EIT5qZcyEve5nL9aCtpzHmtq49zVYSOoraCv4AZBHgPc3P/7EOsgGCoYzt4SKnOTIAyZGYJrwzzLu0XQi4Lx9WEZdJqg0wVfqmAlzwJDUB/BmvompJwiqLND5FQwXtuujJ3TA1TlmM8eDytB2P9absMfaVbshryN+DeJuDsrzATNor7RMezV3xvkWMwWQZFIpIe8jNB0v0kZuedAm91gdaSm31iL5NSEjiDuO92h4bqGwzIUMaOdHnSe0ktpztfwaRwqgqT3QAheqHnNZZoyIlQ9COT00/BDzrpcwy9fs51ZfhEEXdJRw+8AdY9XBPm2q4HyklM0/HRqE7H3f4mN2NAXgrKUXgUZihGsVl0Mt7GKDfKLIAyTIxp+2cqoj7bSeybb+H5DZEE5zQ+CsEn4u6avlb2x2cpI2tuxiX4Q9JOquzIjmaHOuXcax6H0ZaADK/V46UW9vCYIavgLG43+XHBRks9QLP6B3TsfZ6/pOmqXv8hdGSAvn9psOIiap4zcD5bkQsINQ+agKBqN/uZVjFOsjAdLsm2co4DwwhAgY5/sfk9iMbkT++TlVRUus7zTajfdMcvjL7hEWa9oi9llclMf9JQgueBmVVv64rY9p4yiz9kW/VC01U33YRcnqjtQQLXWZXIeFsTu/tOC9Wn6oR6yPW+kljmViOrDRp/rMDEourpeHVujiJ60VaXOEy0TYq72K9RIZEigLXbwfNBZJ6rEBZw7Uugo2CtOkOM0QbDBmAyVveqybwUDGMFXpDjuG5W4bmiKkDPSqS/0r1A8PEfvAZneL+ck+wgJNVR1RIhEuRkEvHhUcyNJhWwosdgElNEsYGA7pnh05ZI0fJARRSF7W8Z6hxhbQtv9+k+64q7tx8xBmEca2gwh4odIMYce5qaWJKkBswEQbfvZIPSGn1XqCtnEanV0ZYncpNHKKLz6uI7DeyojGwr0IlHZvFEoPF/H6AAPDO+J70GLKPNxwC10qC92heBJ3qx0rEh60OT4HnQrleZQ3s1xIVTKiexKVbtRUEEgL76XqyBSx/GZx6aJlnl0+5s5JlH0hO2Z25i/2RpigjaRgHKKxkTWjcMrRsy+VKsYHvp/n39fyskTlWKtQ0rQbmVU6lelOOYHwXem/0vrWuYhzpaa/p9A7TFJ+biJ55BlUZVv4nSiuHDE6icxOa9KRwehEnVu3ImLBDuV8Qhm85AR04TtRvufVcZvhtzNz9qYRshazsFpCUVUbsTX5eARI8zwSDwh2ZUfcGIwv8yh3kK7c00TdkxQ9jcdP9Oqkp7GSbsqwUw/jBpmC4dh94CQAvF4D1X59ySieZwK72wSpbGNhF9UXDFYusHqR7woqsAuSNKgGSaBCE21QfCVh6REGHoMZqiSzCBdzFUpOaYg+0470fxOqu0pglQ/AdFP1e7bl/IubuHEt07pPS8Wbw05tLHK9mDYkFeHTzV7/Jtx76PCLYOB9kqnYrF8jtWLLX4xSPrNXHrLuWJgQizj31Uc9kd58zBf4PmzTozsWzPm6mJxkXiHwndX3PvNTOFOh/8sdQliMSu2gb1kiDJ+qyPdffpGjId6ejTs0HORrF+R5PNWXKnHuJXuWMCAD3tY21Rw7GtGAV1TkKPYc0aoFNvoTuWDZlBoTWLj/LIV7NUISt8IYsJsOhtXoIxk/l4PSNlMZYzJGj/stNDJk7tVHLmaeIQTeV9qqTxOjHasjAm2pZwL17nJvtvVo8gQfEZMZXKqHXVHPlekFswgNFK1JXPwO8gVZg/lwnpKht1ejtm/BRgAKCaVSdcawG4AAAAASUVORK5CYII=);
}
.market-btn-light {
    border-color: rgba(255, 255, 255, 0.14);
    background-color: rgba(0, 0, 0, 0);
}
.market-btn-light .market-button-title {
    color: #fff;
}
.market-btn-light .market-button-subtitle {
    color: rgba(255, 255, 255, 0.6);
}
.market-btn-light:hover {
    background-color: rgba(255, 255, 255, 0.06);
}
.market-btn-light.apple-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.market-btn-light.amazon-btn {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1QjFCQzQ2QjRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1QjFCQzQ2QTRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pk2CzRIAAAcFSURBVHja5FxpbBZVFH2ULlhQCq2oiBWLWqCI0AoqKILgGo2KEqlGjSKKIuJaC9EgRKNYURL9YQ2KawKICO5RqZYYsKDFtS1VsSpaU2ypgQYo0HpP5lTGz2/pvNnrTU7yLXNn3px5775777tvurW3tysf5DDBEMEAwUmCEwX9+TsalCRoEfwuqBF8KagTVAt2e9nQZA+vdYRgimCi4GJBd41z7BK8LlgjeMOTVqMHuYxcwRrBgXZnZYegyO32d3NxiGG4LBVMdvkZN7JnfuzGyZNcavQkwXYPyIFkCsoED4SFoDsFHwpSPTb8CwQPO31Sp4fYbMFi5a9MEzwfRILGu2UHNORYwS9BGmIpgldVcGR+0GzQI3T0giKY1XoHZYjBAazHuTT1ywUrOOvtFfQQDBPMEmTYaNd0wZIgOIrzNB29zYKcBOcuseFIljjhKDoxxC7U0FkuGCnYmuC4ewVzNNt1ahCGGILNXy3qIOAcalEHAWuuRZ0/BUcKDvhppM/X0HlQQ+dtDZ0setm+zmKtFo9HCuM9jeuUabYv3e90x0uCfvReewoOZZAai3g4kjs1rlNnwz8LVKjRgwT1EeQIjicGCdoEM5gEsyonCGo19PIEVUFKmO0hGgRbnIwZ/fI4k1TXFtvEJgf8BtNo13R9mv1dgSDYpwJlJO6zaL/6MiLPofHXlX1hI+gYwVjBZYLBDHCz/u9DbKCgkK7AoLAZMTcJwpBZJLgozFbeLYKeFNzRFaZBpwk6TvCpClbyLDAEnS5Y39UcKacIynWInEbGa0i471DGUnMD7dk8XzxNB2IxrH/9wClcR5BmxVLRa4KvYjh3urEY4sAf/e5BT9sg5ynB7UGOxewSNFwZyXEduVIZyfpAi91g9SZNvVkWyWkPI0FYd7peQ289h2UoYkY7BI1SeinNpRo6PcJGEBzBMZq672u6EaEiCOSM09BrVsYKqlXJ12xnml8EwS/J0dDbRb/HK4LS/SIoW3CUhp5O4SbW/s+yERv6QlCa0qsgy1DWqy6m2ZjFJvtFEIZJq4beIcqoj7bSe4pt3N9UwdF+EIT1+D80dWdYOPYZZSTt7cg9fhD0vUpcmRFLrhOM7sRxJYJLHZipkbgr8JogeMPrbDT6E8EZMf7rJXjL7pOPkBf9SHecI/jAZsNB1HPKyP1gSp5CuCHIHCwU/OYVQZiN6ml4wyJPCO72Khb7S/CCCpfs93KIQVAp9p2HN7iKQbJOgu5spVHHbTcfhNKSxz0i5zHB5Zz6rQiKtvKUbpG7Q9uGNrS7K3Mjrrexk3pVgsygbIfaJDjF4V6DoqtL1H9rFDHEahPkiZBWucB2CxzegLbSwV5TnuDpF8TRfdape3Jjl94EQY0NYioFkzp5rdFR9Oe4suNwb2m2Xlh/c8xNNUiooarjZCJabgYBL2oWsWl3C92GGotNQBnNMga2M+U+VnVCBxnRkRyqiPX2MLbcKPjZfF/mNAKWjlNshhBmWccLjqJt6kuSujMbgOKmnWzQF8pY4GuznFYoza6Rm7lVGYVX7yY4fASzoWMYn/Wno4sHhcLzCkYH2DDc9C8/SC60gm4+DriaCl1FzhU8xIfVGVkopBdH9qBr6GkW8mnODqGnHE3OUwcXChoJ5MWbOQvmRMk8/lP2lxyRBLuKYxJFT1ieuZb5m9oQE/Q1CdhOpzGa5HF49TSFUTE9aWz6f5OfJ9B4olLs8JAShIC6Lg45iuHSN6bvdYlCDThnq03f72IWsUj5uIjnkCCffh97ViF/w8TRUT/ZZA5L4sViqERdEnFi5FO2KWMLZu+QEZPOdqP9jyrjnSG38L8BphHymTKVzCQKVlG5EVm4hC1GxUw8IdmVH3BiYF9K6W+h3Vkmg91RfDHRdPxiq9H8AhrtliiW/gb6MNUchsMCQgqcx9sEmwXfkghzj0ebc01OacdCwk/KeCmCijaLxZN3eFFUgZ0Wo0GLTA4ifKpKwQYPSYG3ji0LVzAdHEvgupirUvqYguwbIw+2siC3jd72XBX/FRDj1MF1+zo+xWoavgqlt18sUlI4tDHLDmfYMDiBzj72+FcifkeFGyrY8NqdspgZRYuxWD7H6pkWb6yVSbZ6+iVNNIgN/NzCYd/Ghwd7gf1nKOLsR0OKmGuIxUliJR3fyL1qvUzhzsBoMabukm4le8lUJsI7u06fynhohEfDDj0X1WxrY/yfyZl6plsp12UM+LCGtVUFRz5nFDA0DjmKPWe6irOM7tSGukV0tIrYOL9kLXs1gtKXnTih0zsOS9i48cpI5jd7QEoVPWMYa7zYabmTJ3erOLKcuJ+GfCx9qcE0jHakgQm21bSFFW6y73b1KDIEHxHzmZzKpt+RzxkpgxmEVHWwZA56uznDNNFd2ESXod7LMfu3AAMA3eQjZHI91/8AAAAASUVORK5CYII=);
}

</style>

<script>
	$(function() {
  $(document).scroll(function() {
    var $nav = $(".fixed-top");
    //add background to nav when scrolled
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});

</script>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#page-top">JOBSJALA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#privacypolicy">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="parallax1" id="page-top">
  <div class="heading">
        JOBSJALA
  </div>
</div>

<section class="section1" id="about">
  <h1>About Us</h1>
  <br>
  <div class="col-md-12 row">
    <div class="col-md-6">
	  Jobsjala is a job vacancy site, Jobsjala is committed to putting job seekers first, giving them free access to find jobs, create CVs, and find out information about a company. Every day, we connect millions of people to new opportunities.
    </div>
    <div class="col-md-6">
	  Jobsjala, our mission is to help people find jobs. We have more than 1000 global employees who are dedicated and working to achieve this goal and make the overall hiring process better through real stories and data. We offer a collaborative work environment that works hard to create the best experience for job seekers.
    </div>
  </div>
</section>

<div class="parallax2" id="services">
  <div class="heading-sm">
	<center> 
			<h2 class="h3 py-4">Download</h2>
			<!-- App Store button -->
			<a href="#" target="_blank" class="market-btn apple-btn" role="button">
			<span class="market-button-subtitle">Download on the</span>
			<span class="market-button-title">App Store</span>
			</a>

			<!-- Google Play button -->
			<a href="#" target="_blank" class="market-btn google-btn" role="button">
			<span class="market-button-subtitle">Download on the</span>
			<span class="market-button-title">Google Play</span>
			</a>
	</center>
  </div>
</div>

<section class="dark">
  <h2>Always open job</h2>
  <p>At Jobsjala, you will have the opportunity to work with a great team, overcome challenges and make things happen! We are looking for people with a passion for excellence who believe in the power of teamwork and integrity.
</p>
</section>

<div class="parallax3" id="privacypolicy"></div>

<div class="dark" style="text-align: left">
  <h3 class="text-center"></h3>
  <br>
  <div class="col-md-12 row">
    <div class="col-md-12">
<h1>Privacy Policy</h1>
<p>Last updated July 2021.
<br><br>
Welcome to JOBSJALA (the "Site"), provided by JOBSJALA,  disclosure in accordance with this Policy.</p>
<h2>Information We Collect</h2>
<p>When you create an account and use our Service, we collect the following types of information from you:
<br><br>
1. Name;<br>
2. Contact information such as your email address and phone number;<br>
3. Demographics information such as your gender and location;<br>
4. Any other information, such as reviews, content, and bio, you provide us.<br>
If you create an account using, or otherwise connect your account to, a social networking services account (e.g. Twitter or Facebook), we may also collect information provided to us by such social networking service including for example your: name; email address; birthday; geographic location; interests; profile picture; gender; networks; user ID; list of friends; and any information you have made public on such social networking account.
<br><br>
We automatically collect information about how you use our services, for example, pages you have viewed. We also collect certain technical information about your device including your Internet protocol address, geo-location information, your browser type, language and identifying information, your operating system and application version, device types, device model and manufacturer, device identifiers, and your device operating system type and version.
<br><br>
We also use cookies, Web beacons, and URL information to gather information regarding the date and time of your visit and the information for which you searched and which you viewed. Cookies are small pieces of information that a website sends to your computer's hard drive while you are viewing a website. We may use both session cookies (which expire once you close your web browser) and persistent cookies (which usually stay on your computer until you delete them) to provide you with a more personal and interactive experience on our Site. Web beacons are digital images that are used to log information on the Services or in our emails. We use Web beacons to manage cookies, count visits, and to learn what marketing works and what does not. We also use Web beacons to tell if you open or act on our emails.
<br><br>
Others, including third party analytics service providers and advertising partners may also collect personally identifiable information about your online activities over time and across different Web sites when you use our Services, including as described in this Privacy Policy. This Policy does not apply to and we are not responsible for those other parties. Third party analytics services may use cookies and web beacons through our Site (for example Google Analytics) to provide us with information about how you use and interact with our Site. We encourage you to review the privacy policies of these third parties to learn about your choices about information they collect from you.</p>
<h2>Sharing Of Your Information</h2>
<p>The JOBSJALA Services may allow you to connect and share your actions, comments, content, profile, and information publicly or with other people. Please be mindful of your own privacy needs as you choose who to connect with and what to share and make public. We cannot control the privacy or security of information you choose to make public or share with others.
<br><br>
The Services may also provide you with the option to share certain information from your JOBSJALA account with social networking services like Facebook, Google, or Twitter. We are not responsible for the use or re-sharing by others of any of your information once it is made public. If you do not want your information to be made public, you should not use the JOBSJALA Services in this manner and/or you should adjust your privacy settings on the applicable social networking service accordingly. We are not responsible for and we do not control these social networking services privacy practices. Please review the applicable privacy policy for information about how they use your information.</p>
<h2>How we Use Your Information</h2>
<p>We generally use your information to:
<br><br>
Facilitate the creation of and secure your account on the Services;
Identify you as a user in our system;
Provide, personalize, and improve the Services;
Communicate with you about your use of the Services;
Develop new products and services,
Customize the advertising you view and recommend content;
Fulfill your requests;
Send newsletters, surveys, offers and promotional materials related to the Services and for other marketing purposes of JOBSJALA using your contact information;
Protect, investigate, and prevent potentially fraudulent, unauthorized, or illegal activities;
Protect our rights and the rights of other users; and
As otherwise described in this Privacy Policy or in notices we provided to you.
We may also use your information to verify your geographic location. We may use your geographic location data to personalize our Service, to recommend content, determine whether the information you have requested is available in your location.</p>
<h2>How we Disclose Your Information</h2>
<p>We may share your information as follows:
<br><br>
1. We may share your personal information with your consent or at your direction.
2. We may also share your information with others who perform services on our behalf.
3. We may disclose your information if we believe we are required to do so by law, or to comply with a court order, judicial or other government subpoena, or warrant.
4. We also may disclose your information if we believe doing so is appropriate or necessary to prevent any liability, or fraudulent, abusive, or unlawful uses or to protect JOBSJALA and our Services; or any rights, property, or personal safety of JOBSJALA or others.
5. In the event that JOBSJALA is or may be acquired by or merged with another company or involved in any other business deal (or negotiation of a business deal) involving sale or transfer of all or part of our business or assets, we may transfer or assign your information as part of or in connection with the transaction. Finally, in the event of insolvency, bankruptcy, or receivership, information may be transferred as a business asset.
We may also share aggregated and anonymized data with our partners, advertisers, and other third parties.</p>
<h2>Security</h2>
<p>JOBSJALA takes commercially reasonable steps to help protect your Information against loss, misuse and unauthorized access, or disclosure. No company can fully prevent security risks, however. While we strive to protect your personal information, we cannot guarantee its absolute security. To help protect yourself and your information, choose a unique password for our Services and do not use a password on our Services that you would use on any other website or online service.</p>
<h2>Dispute Resolution</h2>
<p>If you believe that JOBSJALA has not adhered to this Statement, please contact JOBSJALA by e-mail at support@deviine.com. We will do our best to address your concerns. If you feel that your complaint has been addressed incompletely, we invite you to let us know for further investigation.</p>
<h2>Information Choices</h2>
<p>You may opt out of receiving promotional emails from JOBSJALA by following the instructions in those emails. If you opt out, we may still send you non-promotional emails, such as emails about your accounts or our ongoing business relations. You may also send requests about your personal information, including changes to your contact preferences, changes to or deletions of your information or content you post, and requests to opt-out of sharing your personal information with third parties by emailing support@deviine.com. Please note that deletion of your information or content does not ensure complete or comprehensive removal of the content or information posted on the Services.
<br><br>
When you visit the Site, we and others give you the following choices about use of mechanisms for tracking, including tracking of your online activities over time and across different websites and online services by third parties. Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies from our Site or from third parties. If you choose to remove cookies or reject cookies, this could affect certain features or services of our Site. To opt-out of Google Analytics web tracking for certain browsers, you can download Google Analytics Opt-out Browser Add-on. You may opt out of other cookies that may be present on the Site by following the directions on Google's opt-out page. However, while we and others give you choices as described in this policy, there are many ways in which Web browser signals and other similar mechanisms can indicate your choice to disable tracking, and our Site may not be aware of or honor every mechanism.
<br><br>
You may have the right to know what personal information JOBSJALA has about you and to correct any inaccuracies. Please direct any such requests by email to support@deviine.com or by one of the other means listed below.</p>
<h2>Changes and Updates to this Privacy Policy</h2>
<p>From time to time, we may revise the Policy. To help you stay current of any changes, we note the date the Privacy Policy was last updated above.</p>
<h2>Contact Information</h2>
<p>Please contact JOBSJALA with any questions or comments about this Policy, your information, our third-party disclosure practices, or your consent choices.
<br><br>
JOBSJALA <br>
Jl Malaka Merah II Blok D No 12, Pondok
<br>
Kopi, Duren Sawit, <br>
Jakarta Timur 13460<br>
Email: support@jobsjala.biz.id</p>
    </div>

  </div>

</div>

<div class="parallax4"></div>

<section class="section1" id="contact-header">
  <h1>Contact Us</h1>
</section>
<div class="parallax5">
  <section id="contact">
    <div class="container">
      <div id="form-content" class="col-lg-8 mx-auto bg-light form">
        <h3>Got Questions?</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus esse voluptate ullam ab consequatur, ex illo sed harum ut labore doloremque ipsum voluptatum tempore? Incidunt magni reiciendis totam? Ducimus?</p>
        --> <hr>
        <form style="padding: 30px;">
          <div class="control-group">
            <div class="group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <input class="col-md-12" type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Name</label>
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="control-group">
            <div class="group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <input class="col-md-12" type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="control-group">
            <div class="group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <textarea class="col-md-12" type="textarea" rows="5" required="required"></textarea>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Message</label>
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary col-md-12 btn-xl" id="sendMessageButton">Send
                                Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>