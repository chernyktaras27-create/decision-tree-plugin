const { createApp, reactive } = Vue;

createApp({
  setup() {
    const state = reactive({
      history: [],
      current: (DecisionTreeConfig && DecisionTreeConfig.tree) || null,
      ui: (DecisionTreeConfig && DecisionTreeConfig.ui) || {
        labels: {
          back: "Zurück",
          recommendation: "Empfehlung",
          more: "Mehr erfahren",
        },
      },
    });

    function selectAnswer(answer) {
      if (answer.next) {
        state.history.push(state.current);
        state.current = answer.next;
      } else if (answer.recommendation) {
        state.history.push(state.current);
        // нормалізуємо вузол рекомендації, щоб завжди був один формат
        state.current = {
          recommendation: answer.recommendation,
          link: answer.link || null,
        };
      }
    }

    function goBack() {
      if (state.history.length > 0) {
        state.current = state.history.pop();
      }
    }

    return { state, selectAnswer, goBack };
  },
  template: `
  <div class="dtree-container" v-if="state.current">
    <div v-if="state.current.question">
      <h2 class="dtree-title">{{ state.current.question }}</h2>
      <div class="answers">
        <button
          v-for="(a,i) in state.current.answers"
          :key="i"
          class="answer"
          type="button"
          @click="selectAnswer(a)"
        >
          {{ a.text }}
        </button>
      </div>
      <button v-if="state.history.length" class="back-btn" type="button" @click="goBack">⬅ {{ state.ui.labels.back }}</button>
    </div>

    <div v-else-if="state.current.recommendation">
      <h2 class="dtree-title">{{ state.ui.labels.recommendation }}</h2>
      <p class="recommendation-text">{{ state.current.recommendation }}</p>
      <div class="recommendation-actions">
        <a v-if="state.current.link && state.current.link.url"
           class="primary-link"
           :href="state.current.link.url"
           target="_blank" rel="noopener">
           {{ state.current.link.label || state.ui.labels.more }}
        </a>
        <button class="back-btn" type="button" @click="goBack">⬅ {{ state.ui.labels.back }}</button>
      </div>
    </div>
  </div>
  `,
}).mount("#decision-tree");
