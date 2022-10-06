<template>
  <section>
    <div class="pacman">
      <div class="pacman-top"></div>
      <div class="pacman-bottom"></div>
      <div class="feed"></div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Pacman",
};
</script>

<style scoped>
.pacman {
  margin: 40px 10px;
}
.pacman:hover {
  animation: none;
}

.pacman-top {
  background-color: yellow;
  height: 25px;
  width: 50px;
  border-radius: 100px 100px 0 0;
  animation: spin1 0.5s infinite linear;
}

.pacman-bottom {
  background-color: yellow;
  height: 25px;
  width: 50px;
  border-radius: 0 0 100px 100px;
  animation: spin2 0.5s infinite linear;
}

.feed {
  margin-top: -95px;
  margin-left: 15px;
  width: 15px;
  height: 15px;
  border-radius: 30%;
  -moz-animation: eat 1s linear 0s infinite;
  -webkit-animation: eat 1s linear 0s infinite;
  animation: eat 1s linear 0s infinite;
}

/* Animation*/

@keyframes spin1 {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-35deg);
  }
}
@keyframes spin2 {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(35deg);
  }
}

@-moz-keyframes spin1 {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-35deg);
  }
}
@-moz-keyframes spin2 {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(35deg);
  }
}
@-webkit-keyframes spin1 {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-35deg);
  }
}
@-webkit-keyframes spin2 {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(35deg);
  }
}

@keyframes eat {
  0% {
    box-shadow: 100px 65px 0 0 blue, 300px 65px 0 0 purple, 500px 65px 0 0 pink,
      700px 65px 0 0 orange, 900px 65px 0 0 orangered, 1100px 65px 0 0 red,
      1300px 65px 0 0 greenyellow, 1500px 65px 0 0 yellow,
      1700px 65px 0 0 yellowgreen, 1900px 65px 0 0 green,
      2100px 65px 0 0 greenyellow, 2300px 65px 0 0 red,
      2500px 65px 0 0 orangered, 2700px 65px 0 0 orange, 2900px 65px 0 0 pink,
      3100px 65px 0 0 purple, 3300px 65px 0 0 blue;
  }

  100% {
    box-shadow: 0px 65px 0 0 blue, 100px 65px 0 0 purple, 300px 65px 0 0 pink,
      500px 65px 0 0 orange, 700px 65px 0 0 orangered, 900px 65px 0 0 red,
      1100px 65px 0 0 greenyellow, 1300px 65px 0 0 yellow,
      1500px 65px 0 0 yellowgreen, 1700px 65px 0 0 green,
      1900px 65px 0 0 greenyellow, 2100px 65px 0 0 red,
      2300px 65px 0 0 orangered, 2500px 65px 0 0 orange, 2700px 65px 0 0 pink,
      2900px 65px 0 0 purple, 3100px 65px 0 0 blue;
  }
}

@-moz-keyframes eat {
  0% {
    box-shadow: 100px 65px 0 0 blue, 300px 65px 0 0 purple, 500px 65px 0 0 pink,
      700px 65px 0 0 orange, 900px 65px 0 0 orangered, 1100px 65px 0 0 red,
      1300px 65px 0 0 greenyellow, 1500px 65px 0 0 yellow,
      1700px 65px 0 0 yellowgreen, 1900px 65px 0 0 green,
      2100px 65px 0 0 greenyellow, 2300px 65px 0 0 red,
      2500px 65px 0 0 orangered, 2700px 65px 0 0 orange, 2900px 65px 0 0 pink,
      3100px 65px 0 0 purple, 3300px 65px 0 0 blue;
  }

  100% {
    box-shadow: 0px 65px 0 0 blue, 100px 65px 0 0 purple, 300px 65px 0 0 pink,
      500px 65px 0 0 orange, 700px 65px 0 0 orangered, 900px 65px 0 0 red,
      1100px 65px 0 0 greenyellow, 1300px 65px 0 0 yellow,
      1500px 65px 0 0 yellowgreen, 1700px 65px 0 0 green,
      1900px 65px 0 0 greenyellow, 2100px 65px 0 0 red,
      2300px 65px 0 0 orangered, 2500px 65px 0 0 orange, 2700px 65px 0 0 pink,
      2900px 65px 0 0 purple, 3100px 65px 0 0 blue;
  }
}

@-webkit-keyframes eat {
  0% {
    box-shadow: 100px 65px 0 0 blue, 300px 65px 0 0 purple, 500px 65px 0 0 pink,
      700px 65px 0 0 orange, 900px 65px 0 0 orangered, 1100px 65px 0 0 red,
      1300px 65px 0 0 greenyellow, 1500px 65px 0 0 yellow,
      1700px 65px 0 0 yellowgreen, 1900px 65px 0 0 green,
      2100px 65px 0 0 greenyellow, 2300px 65px 0 0 red,
      2500px 65px 0 0 orangered, 2700px 65px 0 0 orange, 2900px 65px 0 0 pink,
      3100px 65px 0 0 purple, 3300px 65px 0 0 blue;
  }

  100% {
    box-shadow: 0px 65px 0 0 blue, 100px 65px 0 0 purple, 300px 65px 0 0 pink,
      500px 65px 0 0 orange, 700px 65px 0 0 orangered, 900px 65px 0 0 red,
      1100px 65px 0 0 greenyellow, 1300px 65px 0 0 yellow,
      1500px 65px 0 0 yellowgreen, 1700px 65px 0 0 green,
      1900px 65px 0 0 greenyellow, 2100px 65px 0 0 red,
      2300px 65px 0 0 orangered, 2500px 65px 0 0 orange, 2700px 65px 0 0 pink,
      2900px 65px 0 0 purple, 3100px 65px 0 0 blue;
  }
}
</style>
