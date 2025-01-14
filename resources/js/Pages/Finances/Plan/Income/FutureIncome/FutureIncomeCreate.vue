<template>
    <form @submit.prevent="create">
      <input style="border: 1px solid blue;" v-model="form.amount" type="text" placeholder="New future income"/>
      <input style="border: 1px solid blue;" v-model="form.effective_date" type="text" placeholder="date"/>
      <input style="border: 1px solid blue;" v-model="form.notes" type="text" placeholder="notes"/>
      <button type="submit">&nbsp;+</button>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
    incomeId: Number,
})
const form = useForm({
  amount: null,
  effective_date: null,
  notes: null,
  income_id: props.incomeId,
  })
const create = () => {
    form.post(`/futureIncome`, {preserveScroll:true});
    form.amount = "";
    form.effective_date = "";
    form.notes = "";
}
</script>