@extends('base')

@section('content')

<main class="flow">
  <section class="flow">
    <header>
      <h2>Demos</h2>
      <h3>Technical demonstration projects</h3>
    </header>
    <ul class="flow">
      <li>
        <h4><a href="https://field.instance.run/" target="_blank">A survey and mapping application</a></h4>
        <p>A remnant from a batch of technical demos I made a few years back allowing for the marking, encoding and display of geospatial data. Although never developed for real world use, it was inspired by urban habitat connectivity studies that interested me at the time. The application integrates Vue.js with third party libraries and services, in this case Leaflet and the Mapbox API. I had started to fetch in some basic features from TurfJS, a library for geospatial analysis, but got terribly bored!</p>
      </li>
      <li>
        <h4><a href="https://subverse.instance.run/" target="_blank">An audio sampler &amp; player</a></h4>
        <p>An aging audio player written in plain javascript and using the WebAudioAPI. If you'd like to try it out, please make sure the master volume on your computer is reasonably low - the volume slider is a bit clunky and I haven't bothered to fix it. Also, owing to limitations at the time I made this, it won't work on mobile browsers and has a rudimentary browser check that will probably bar it from doing so anyway.</p>
      </li>
    </ul>
  </section>
  <hr>
  <section class="flow">
    <header>
      <h2>Sandbox</h2>
      <h3>Experiments, prototypes and work in progress</h3>
    </header>
    <ul class="flow">
      <li>
        <h4><a href="http://pinmapped.instance.run/" target="_blank">A global map viewer</a></h4>
        <p>A modular presentation layer for various geospatial data. Making use of a custom build of D3.js, the application is designed to optimise performance in the display of large datasets.</p>
      </li>
      <li>
        <h4><a href="https://svelte-rx.instance.run/" target="_blank">A dashboard for streaming data</a></h4>
        <p>Combining the Svelte compiler with RxJS to create a simple dashboard for streaming data.</p>
      </li>
      <li>
        <h4><a href="https://rendered-maps.instance.run/" target="_blank">A map image generator</a></h4>
        <p>Experimenting with generating server rendered map images.</p>
      </li>
    </ul>
  </section>
</main>

<style>
  @font-face {
  font-family: "Inter Subset";
  src: url(https://assets.codepen.io/4590803/Inter-subset.woff2) format("woff2");
  font-weight: 1 999;
  font-display: swap;
}

:root {
  --ratio: 1.75;
  --highlight: hsl(262, 58%, 70%);
}

*,
*::before,
*::after {
  font-family: inherit;
  font-size: inherit;
  color: inherit;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  min-height: 100vh;
  text-rendering: optimizeSpeed;
  line-height: 1.4;
}

a {
  text-decoration: none;
  color: inherit;
}

ul {
  list-style: none;
}

img {
  max-width: 100%;
  display: block;
}

input,
button,
textarea,
select {
  font: inherit;
}

html {
  font-family: "Inter Subset", sans-serif;
  font-size: calc(1em + 0.333vw);
  background-color: #fff;
  color: #000;
}

ul {
  list-style: none;
  padding: 0;
}

body > * {
  box-sizing: content-box;
  margin-left: auto;
  margin-right: auto;
  max-width: 42rem;
  padding: 0rem 1rem 0 1rem;
  margin-top: 3rem;
  margin-bottom: 3rem;
}

hr {
  display: block;
  width: 4rem;
  background-color: var(--highlight);
  height: 0.3rem;
  border: none;
  opacity: 0.25;
}

p {
  line-height: var(--ratio);
}

a:hover {
  color: var(--highlight);
}

p > a {
  color: var(--highlight);
  border-bottom: 0.2rem solid var(--highlight);
}

h1,
h2,
h3 {
  font-size: 1.75rem;
  font-weight: 400;
  letter-spacing: -0.05rem;
}

h1 {
  color: var(--highlight);
}

h2 {
  font-weight: 600;
  letter-spacing: -0.1rem;
}

h3 {
  color: var(--highlight);
}

h3 {
  font-size: 1.25rem;
}

h4 {
  font-size: 1.25rem;
  font-weight: 600;
  letter-spacing: -0.05rem;
}

h4 a {
  color: var(--text);
  text-decoration: underline;
  text-decoration-thickness: 0.125rem;
}

li > * + * {
  margin-top: 0.25rem;
}

.flow > * + * {
  margin-top: 1.5rem;
}

</style>

    
@endsection

