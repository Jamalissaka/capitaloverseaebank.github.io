<style>
  footer {
    text-align:center;
    padding: 5px;
    background-color: #2c71b0;
    color: #000;
}
/* Not fully responsive. Just a little bit */
@media (max-width: 500px) {
  html {
    font-size: 45%;
  }

  h1 {
    font-size: 4rem;
  }

  .nav {
    justify-content: center;
    align-items: center;
    height: auto;
    padding: 1rem 1rem;
  }

  .nav__logo {
    display: none;
  }

  .nav__links {
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }

  .header__title {
    display: flex;
    flex-direction: column;
  }

  .features {
    grid-template-columns: 1fr;
    margin: 0;
  }
  .operations__tab {
    margin-right: 0;
  }

  .operations__content {
    padding: 1rem;
  }

  .testimonial__text {
    font-size: 1.2rem;
  }

  .footer__nav {
    flex-wrap: wrap;
  }
}

/* Media query */
@media only screen and (max-width: 920px) {
  nav {
    padding: 0;
  }

  .app {
    grid-template-columns: 55%;
  }

  .summary {
    flex-wrap: wrap;
  }

  .operation {
    padding: 3rem 3rem;
  }
}

@media only screen and (max-width: 750px) {
  nav {
    flex-direction: column;
    padding: 0;
  }

  .logo {
    margin: 10px 0;
  }

  .app {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-content: center;
  }

  .balance__label {
    font-size: 1.7rem;
  }

  .balance__date {
    font-size: 1.4rem;
  }

  .balance__value {
    font-size: 3.2rem;
  }

  .movements {
    height: 50vh;
    width: 90vw;
  }

  .movements__date {
    margin-right: 10px;
  }

  .movements__row {
    justify-content: space-between;
    padding: 2rem 3rem;
    align-items: center;
    flex-wrap: wrap;
  }

  .summary {
    margin-top: 2rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    flex-direction: row;
  }

  .operation {
    padding: 3rem 2rem;
  }

  .operation--loan,
  .operation--close {
    margin-top: 0;
  }

  .form.form--loan {
    grid-template-columns: 3.5fr 1fr 1.5fr;
  }

  .logout-timer {
    margin-bottom: 1rem;
    text-align: center;
    margin-top: 0;
  }
}

@media only screen and (max-width: 420px) {
  .balance {
    flex-wrap: wrap;
    flex-direction: column;
    align-content: center;
    align-items: center;
  }

  .balance__value {
    margin-top: 1rem;
    font-size: 3.5rem;
  }

  .balance__label {
    font-size: 1.9rem;
  }

  .balance__date {
    font-size: 1.6rem;
  }
}


</style>
<footer> <small>Copyright © 2023 Overseas  Bank. All Rights Reserved.</small></footer>