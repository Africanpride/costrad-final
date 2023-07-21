<x-app-layout>


    <div class="p-8">


        <div class="progress-bar-container flex">
            <div class="progress-bar js">
                <progress id="js" min="0" max="100" value="73"></progress>
            </div>
        </div>




    </div>

</x-app-layout>

<style>

@property --progress-value {
    syntax: "<integer>";
    inherits: false;
    initial-value: 0;
  }
  @-webkit-keyframes js-progress {
    to {
      --progress-value: 33;
    }
  }
  @keyframes js-progress {
    to {
      --progress-value: 33;
    }
  }
  .progress-bar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    /* to center the percentage value */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .progress-bar::before {
    counter-reset: percentage var(--progress-value);
    content: counter(percentage) "%";
  }

  .js {
    background: radial-gradient(closest-side, white 79%, transparent 80% 100%, white 0), conic-gradient(hotpink calc(var(--progress-value) * 1%), pink 0);
    -webkit-animation: js-progress 2s 1 forwards;
            animation: js-progress 2s 1 forwards;
  }

  .js::before {
    -webkit-animation: js-progress 2s 1 forwards;
            animation: js-progress 2s 1 forwards;
  }


  h2 {
    text-align: center;
  }

  progress {
    visibility: hidden;
    width: 0;
    height: 0;
  }
</style>
