<template><br />
  <form @input="update">
    <input v-model="form.description" type="text" :readonly="isAdmin === 0" />
    <input v-model="form.amount" type="text" :readonly="isAdmin === 0" />
    <select v-model="form.frequency" :disabled="isAdmin === 0" >
      <option>Biweekly</option>
      <option>Bimonthly</option>
      <option>Monthly</option>
      <option>Quarterly</option>
      <option>Yearly</option>
    </select>
    <input v-model="form.day_deposited" type="text" :readonly="isAdmin === 0" />
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
    <input v-model="form.notes" type="text" :readonly="isAdmin === 0" />  

    <FutureIncomeReadUpdateDelete v-for="futureIncome in futureIncomes" 
      :key="futureIncome.id" 
      :futureIncome="futureIncome" 
      :incomeId="income.id"
      :isAdmin="$page.props.isAdmin" />

  </form>
  <FutureIncomeCreate v-if="isAdmin===1" :incomeId="income.id" :key="income.id"/>
  <Link v-if="isAdmin" :href="`/income/${props.income.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete Income</Link>
  <br />
</template>
 
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  import FutureIncomeReadUpdateDelete from './FutureIncome/FutureIncomeReadUpdateDelete.vue';
  import FutureIncomeCreate from './FutureIncome/FutureIncomeCreate.vue';
  const props = defineProps({
    income: Object,
    futureIncomes: Array,
    isAdmin: Number,
    userId: Number,
  })
  const form = useForm({
    description: props.income.description,
    amount: props.income.amount,
    frequency: props.income.frequency,
    day_deposited: props.income.day_deposited,
    notes: props.income.notes,
  })
  const update = () => {
    if(props.isAdmin===1) {
      form.put(`/income/${props.income.id}`, {preserveScroll:true})
    }
  }
  </script>