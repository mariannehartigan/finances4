<template>
  <form @input="update">
    <input v-model="form.description" type="text" :readonly="isAdmin === 0" />
    <input v-model="form.amount" type="text" :readonly="isAdmin === 0" />
    <select v-model="form.frequency" :disabled="isAdmin === 0" >
      <option>Weekly</option>
      <option>Biweekly</option>
      <option>Bimonthly</option>
      <option>Monthly</option>
      <option>Quarterly</option>
      <option>Yearly</option>
    </select>
    <input v-model="form.day_due" type="text" :readonly="isAdmin === 0" />
    <span v-if="
      props.fixedExpense.day_due == 1 ||
      props.fixedExpense.day_due == 21 ||
      props.fixedExpense.day_due == 31">st</span>
    <span v-else-if="
      props.fixedExpense.day_due == 2 ||
      props.fixedExpense.day_due == 22">nd</span>
    <span v-else-if="
      props.fixedExpense.day_due == 3 ||
      props.fixedExpense.day_due == 23">rd</span>
    <span v-else-if="
      props.fixedExpense.day_due >= 4 &&
      props.fixedExpense.day_due <= 20 ||
      props.fixedExpense.day_due >= 24 &&
      props.fixedExpense.day_due <= 30">th</span>
    <input v-model="form.notes" type="text" :readonly="isAdmin === 0" /> 
    <Link v-if="isAdmin" :href="`/fixedExpenses/${props.fixedExpense.id}`" method="DELETE" as="button" preserve-scroll>&nbsp-</Link>
    <FutureFixedExpensesReadUpdateDelete v-for="futureFixedExpense in futureFixedExpenses" 
      :key="futureFixedExpense.id" 
      :futureFixedExpense="futureFixedExpense" 
      :fixedExpenseId="fixedExpense.id"
      :isAdmin="$page.props.isAdmin" />

  </form>
  <FutureFixedExpenseCreate v-if="isAdmin===1" :fixedExpenseId="fixedExpense.id" :key="fixedExpense.id"/>
  <br />
</template>

<script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  import FutureFixedExpensesReadUpdateDelete from './FutureFixedExpenses/FutureFixedExpensesReadUpdateDelete.vue';
  import FutureFixedExpenseCreate from './FutureFixedExpenses/FutureFixedExpenseCreate.vue';
  const props = defineProps({
    fixedExpense: Object,
    futureFixedExpenses: Array,
    isAdmin: Number,
    userId: Number,
  })
  const form = useForm({
    description: props.fixedExpense.description,
    amount: props.fixedExpense.amount,
    frequency: props.fixedExpense.frequency,
    day_due: props.fixedExpense.day_due,
    notes: props.fixedExpense.notes,
  })
  const update = () => {
    if(props.isAdmin===1) {
      form.put(`/fixedExpenses/${props.fixedExpense.id}`, {preserveScroll:true})
    }
  }
</script>