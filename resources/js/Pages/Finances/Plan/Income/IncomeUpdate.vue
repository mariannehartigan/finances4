<template>
    <form @submit.prevent="update">
      <div @input="update">
        <input v-model="form.description" type="text"/>
        <input v-model="form.amount" type="text" />
        <select v-model="form.frequency">
          <option>Biweekly</option>
          <option>Bimonthly</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>
        <input v-model="form.day_deposited" type="text" />
        <span v-if="
          props.income.day_deposited == 1 ||
          props.income.day_deposited == 21 ||
          props.income.day_deposited == 31">st</span>
        <span v-else-if="
          props.income.day_deposited == 2 ||
          props.income.day_deposited == 22">nd</span>
        <span v-else-if="
          props.income.day_deposited == 3 ||
          props.income.day_deposited == 23">rd</span>
        <span v-else-if="
          props.income.day_deposited >= 4 &&
          props.income.day_deposited <= 20 ||
          props.income.day_deposited >= 24 &&
          props.income.day_deposited <= 30">th</span>
        <input v-model="form.notes" type="text" />  
        <FutureIncome v-for="futureIncome in futureIncomes" :key="futureIncome.id" :futureIncome="futureIncome" :incomeId="income.id"/>
      </div>
    </form>
<!--making a new form then can delete this first form
    <form @submit.prevent="createFutureIncome">
      <input v-model="form.futureIncomeAmount" type="text" placeholder="amount"/>
      <input v-model="form.effective_date" type="text" placeholder="date"/>
      <button type="submit">Create Future Income</button>
    </form>-->

    <FutureIncomeCreate :incomeId="income.id" :key="income.id"/>
    <!--<FutureIncomeCreate v-for="futureIncome in futureIncomes" :key="futureIncome.id" :futureIncome="futureIncome" :incomeId="income.id"/>-->

    <Link :href="`/income/${props.income.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete</Link>

  </template>
 
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  import FutureIncome from './FutureIncome.vue';
  import FutureIncomeCreate from './FutureIncomeCreate.vue';
  const props = defineProps({
    income: Object,
    futureIncomes: Array,
  })
  const form = useForm({
    id: props.income.id,
    description: props.income.description,
    amount: props.income.amount,
    frequency: props.income.frequency,
    day_deposited: props.income.day_deposited,
    notes: props.income.notes,
    /*effective_date: null,
    futureIncomeAmount: null,*/
    income_id: props.income.id,
  })
  const update = () => 
    form.put(`/income/${props.income.id}`, {preserveScroll:true})
  /*const createFutureIncome = () => {
    form.post(`/futureincome`, {preserveScroll:true});
    form.effective_date = "";
    form.futureIncomeAmount = "";
  }*/
  </script>