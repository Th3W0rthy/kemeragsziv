import axios from 'axios'

export const http = axios.create({})

import {defineRule,configure} from 'vee-validate'
import AllRules from "@vee-validate/rules"
import {localize, setLocale} from '@vee-validate/i18n'
import hu from '@vee-validate/i18n/dist/locale/hu.json'

Object.keys(AllRules).forEach(rule => defineRule(rule, AllRules[rule]))

defineRule('string',(value)=>{
    if(typeof value === 'string'){
        return true;
    }
    return 'Az érték nem szöveg!';
})

configure({
    generateMessage: localize({
        hu
    })
})


setLocale('hu');