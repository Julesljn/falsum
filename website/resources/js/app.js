import { GoogleGenerativeAI } from "@google/generative-ai";
require('dotenv').config();

const questionh1 = document.querySelector('.questionh1');
const questionInput = document.querySelector('#questionInput');
const responseInput = document.querySelector('#responseOutput');
const myApiKey = process.env.API_KEY;

// Access your API key as an environment variable (see "Set up your API key" above)
const genAI = new GoogleGenerativeAI(myApiKey);

async function run() {
  // The Gemini 1.5 models are versatile and work with both text-only and multimodal prompts
  const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash"});

  const prompt = "Repond uniquement salut et rien d'autres"
  const result = await model.generateContent(prompt);
  const response = await result.response;
  const text = response.text();
  console.log(text);
}

// run();
console.log(myApiKey);