<h1>
<span style="--animation-order: 0;">B</span>
<span style="--animation-order: 1;">O</span>
<span style="--animation-order: 2;">N</span>
<span style="--animation-order: 3;">J</span>
<span style="--animation-order: 4;">O</span>
<span style="--animation-order: 5;">U</span>
<span style="--animation-order: 6;">R</span>
<span style="--animation-order: 7;">!</span>
</h1>
<footer>
Merci de votre visite, mais ce site n'est pas encore tout à fait prêt. Repassez plus tard !
</footer>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nabla&display=swap&family=Roboto");

footer{
position: fixed;
bottom:0;
}


:root {
  /*    --square: url("data:image/svg+xml,<svg viewBox='0 0 1 1' xmlns='http://www.w3.org/2000/svg'><path style='vector-effect:non-scaling-stroke' stroke='black' fill='none' stroke-width='1px' opacity='.1' d='M0 0 1 0 1 1 0 1 0 0'/></svg>"); 
   
   use background-repeat:space and set position to 0 to make a grid 
   
*/

  /*https://codepen.io/sanbec/pen/yLpZgJw */
  --shape-1: url("data:image/svg+xml,%3Csvg viewBox='0 0 1 1' xmlns='http://www.w3.org/2000/svg'%3E%3Cstyle type='text/css'%3E path%7Btransform-origin: center;animation:x 4s ease-in-out infinite forwards%7D@keyframes x%7Bfrom%7Brotate:0%7Dto%7Brotate:270deg%7D%7D%3C/style%3E%3Cpath fill='%23FFE55A' d='M.5 0A.5.5 90 001 .5.5.5 90 00.5 1 .5.5 90 000 .5.5.5 90 00.5 0'/%3E%3C/svg%3E");
  --shape-2: var(--shape-1);
  --shape-3: var(--shape-1);

  /* grid unit */
  --unit: 5cqw;

  /* set images */
  --background-image: var(--shape-1), var(--shape-2), var(--shape-3);
  --background-repeat: no-repeat, no-repeat, no-repeat;

  /* sizes */
  --offsetTopLeftTextBox_X: 1;
  --offsetTopLeftTextBox_Y: 7;

  --offsetBottomRightTextBox_X: 17;
  --offsetBottomRightTextBox_Y: 11;

  --shape-1-offset-X: calc(0 + var(--offsetTopLeftTextBox_X));
  --shape-1-offset-Y: calc(0 + var(--offsetTopLeftTextBox_Y));
  --shape-1-scale: 2;
  --shape-1-size-from: var(--unit);
  --shape-1-size-to: calc(var(--unit) * var(--shape-1-scale));
  --shape-1-offset: calc((var(--shape-1-scale) - 1) / 2);

  --shape-2-offset-X: calc(8.5 + var(--offsetTopLeftTextBox_X));
  --shape-2-offset-Y: calc(-0.9 + var(--offsetTopLeftTextBox_Y));
  --shape-2-scale: 2.8;
  --shape-2-size-from: var(--unit);
  --shape-2-size-to: calc(var(--unit) * var(--shape-2-scale));
  --shape-2-offset: calc((var(--shape-2-scale) - 1) / 2);

  --shape-3-offset-X: calc(0 + var(--offsetBottomRightTextBox_X));
  --shape-3-offset-Y: calc(0 + var(--offsetBottomRightTextBox_Y));
  --shape-3-scale: 2;
  --shape-3-size-from: var(--unit);
  --shape-3-size-to: calc(var(--unit) * var(--shape-3-scale));
  --shape-3-offset: calc((var(--shape-3-scale) - 1) / 2);

  --shape-1-position-from: calc(
      var(--unit) * calc(var(--shape-1-offset-X) + var(--shape-1-offset))
    )
    calc(var(--unit) * (var(--shape-1-offset-Y) + var(--shape-1-offset)));

  --shape-1-position-to: calc(var(--unit) * var(--shape-1-offset-X))
    calc(var(--unit) * var(--shape-1-offset-Y));

  --shape-2-position-from: calc(
      var(--unit) * calc(var(--shape-2-offset-X) + var(--shape-2-offset))
    )
    calc(var(--unit) * (var(--shape-2-offset-Y) + var(--shape-2-offset)));

  --shape-2-position-to: calc(var(--unit) * var(--shape-2-offset-X))
    calc(var(--unit) * var(--shape-2-offset-Y));

  --shape-3-position-from: calc(
      var(--unit) * calc(var(--shape-3-offset-X) + var(--shape-3-offset))
    )
    calc(var(--unit) * (var(--shape-3-offset-Y) + var(--shape-3-offset)));

  --shape-3-position-to: calc(var(--unit) * var(--shape-3-offset-X))
    calc(var(--unit) * var(--shape-3-offset-Y));

  /* results */
  --background-size-from: var(--shape-1-size-from), var(--shape-2-size-from),
    var(--shape-3-size-from);

  --background-size-to: var(--shape-1-size-to), var(--shape-2-size-to),
    var(--shape-3-size-to);

  --background-position-from: var(--shape-1-position-from),
    var(--shape-2-position-from), var(--shape-3-position-from);

  --background-position-to: var(--shape-1-position-to),
    var(--shape-2-position-to), var(--shape-3-position-to);
}

html {
  height: 100%;
}
body {
  background-color: beige;
  height: 100%;
  overflow: hidden;
  font-family: roboto;
}

h1 {
  pointer-events:none;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  aspect-ratio: 1;
  font-size: 20cqw;
  letter-spacing: -1.1cqw;
  font-family: Nabla;
  position: absolute;
  margin: auto;
  inset: 0;

  &:after,
  &:before {
    pointer-events: none;
    content: "";
    position: absolute;
    inset: 0;
    animation: scaling 2s ease-in-out infinite alternate;
    animation-delay: 0, 1, 1.5s, 3s;
    background-image: var(--background-image);
    background-repeat: var(--background-repeat);
  }

  &:before {
    animation-delay: -800ms;
    transform: scaleX(-0.8) scaleY(-0.8) translateX(4cqw);
    --background-image: var(--shape-1), none, var(--shape-3);
  }
}

span {
/*   --scaling-shadows:.9; */
  --wobbling: 0 -0.15ch;
  /*   display: inline-block; */
  animation: wobbling 1.5s ease-in-out infinite alternate;
  animation-delay: calc(var(--animation-order) * -800ms);
}

/* shadows */
/* span:after{
  position:absolute;
  inset:0;
  top:100%;
  content:"";
  background:grey;
  border-radius:50%;
  opacity:.3;
  height:10px;
  width:90%;
  animation:
    wobbling 1.5s ease-in-out infinite alternate-reverse,
    scaling-shadows 1.5s ease-in-out infinite alternate;
  animation-delay:inherit;
} */

@keyframes wobbling {
  to {
    translate: var(--wobbling);
  }
}

/* @keyframes scaling-shadows {
  to {
    scale: var(--scaling-shadows);
  }
} */

@keyframes scaling {
  from {
    background-size: var(--background-size-from);
    background-position: var(--background-position-from);
  }
  to {
    background-size: var(--background-size-to);
    background-position: var(--background-position-to);
  }
}

@media (prefers-reduced-motion) {
  span {
/*     --scaling-shadows:1; */
    --wobbling: 0;
  }
  h1 {
    --background-size-from: var(--background-size-to);
    --background-position-from: var(--background-position-to);
  }
}

/* simulate reduce-motion */

:is(#reduce-motion, [for="reduce-motion"]) {
  cursor: pointer;
  &:not(:hover) {
    opacity: 0.3;
  }
}

#reduce-motion:checked {
  ~ * span {
    --wobbling: 0;
/*     --scaling-shadows:1; */
  }
  ~ h1 {
    --background-size-from: var(--background-size-to);
    --background-position-from: var(--background-position-to);
  }
}

div{
  background:red;
  width:attr(data-text);
}
</style>