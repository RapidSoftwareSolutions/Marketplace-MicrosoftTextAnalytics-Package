[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/MicrosoftWebLangModel/functions?utm_source=RapidAPIGitHub_MicrosoftWebLangModelFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# MicrosoftTextAnalytics Package
The Text Analytics API is a suite of text analytics web services built with best-in-class Microsoft machine learning algorithms. The API can be used to analyze unstructured text for tasks such as sentiment analysis, key phrase extraction and language detection. No training data is needed to use this API; just bring your text data. This API uses advanced natural language processing techniques to deliver best in class predictions.

* Domain: [azure.microsoft.com](https://azure.microsoft.com/en-us/services/cognitive-services/text-analytics/)
* Credentials: key

## How to get credentials: 
1. Subscribe to the Microsoft Text Analytics API on the [Microsoft Azure portal].(https://azure.microsoft.com/en-us/services/cognitive-services/text-analytics/).
2. Click create button.
3. In settings->credential section you will see apiKey (Ocp-Apim-Subscription-Key)

## Custom datatypes: 
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]``` 
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## MicrosoftTextAnalytics.gerKeyPhrases
The API returns a list of strings denoting the key talking points in the input text.

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Subscription key which provides access to this API. 
| region| String     | Region. Example: westcentralus
| body  | JSON       | Query object

## MicrosoftTextAnalytics.detectLanguage
The API returns the detected language and a numeric score between 0 and 1. Scores close to 1 indicate 100% certainty that the identified language is true. A total of 120 languages are supported.

| Field                    | Type       | Description
|--------------------------|------------|----------
| key                      | credentials| Subscription key which provides access to this API. 
| region                   | String     | Region. Example: westcentralus
| numberOfLanguagesToDetect| Number     | Number of languages to detect. Set to 1 by default. Irrespective of the value, the language with the highest score is returned.
| body                     | JSON       | Query object

## MicrosoftTextAnalytics.getSentimentIndex
The API returns a numeric score between 0 and 1. Scores close to 1 indicate positive sentiment, while scores close to 0 indicate negative sentiment. Sentiment score is generated using classification techniques. The input features to the classifier include n-grams, features generated from part-of-speech tags, and word embeddings. 

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Subscription key which provides access to this API.
| region| String     | Region. Example: westcentralus
| body  | JSON       | Query object

