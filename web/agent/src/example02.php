<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'CustomTool.php';

use Symfony\AI\Agent\Agent;
use Symfony\AI\Agent\Toolbox\AgentProcessor;
use Symfony\AI\Agent\Toolbox\Toolbox;

use Symfony\AI\Platform\Bridge\Gemini\Gemini;
use Symfony\AI\Platform\Bridge\Gemini\PlatformFactory;
use Symfony\AI\Platform\Message\MessageBag;
use Symfony\AI\Platform\Message\Message;

$tool = new CustomTool();

$toolbox = new Toolbox(tools: [$tool],);
$processor = new AgentProcessor(toolbox: $toolbox);

$platform = PlatformFactory::create($_ENV['GEMINI_API_KEY']);
$model = new Gemini(name: Gemini::GEMINI_2_FLASH);

$agent = new Agent(
    outputProcessors: [$processor],
    model: $model,
    inputProcessors: [$processor],
    platform: $platform,
);

$systemPrompt = <<<PROMPT
You are a Symfony AI agent that performs two tasks in sequence:

1. Summarize the document found at a user-provided URL.
2. Tokenize the resulting summary using the tool `tokenize_summary`.

Your behavior must follow these rules:

---

**1. Summary Generation**
- Retrieve and summarize the document at the given URL.
- Use clear, neutral language in short bullet points or concise paragraphs.
- Focus on key ideas, not minor details.
- Do not include personal opinions or speculation.

**2. Tokenization**
- After generating the summary, pass it to the `tokenize_summary` tool.
- The tool will split the summary into individual tokens (words).
- Return the tokenized output to the user.

**3. Tool Invocation**
- Automatically invoke the web content retrieval tool when a URL is mentioned.
- Automatically invoke `tokenize_summary` after summarizing.
- Do not tokenize anything other than the summary.

**4. Fallback Logic**
- If the URL is invalid or unreachable, respond with:
  "I couldn’t retrieve a valid document from the provided URL. Please check the link or try another one."
- If tokenization fails, return the original summary instead.

**5. Output Format**
- Return only the tokenized summary.
- Each token should appear on a separate line.
- Do not include explanations or commentary.

---

**Example user message:**
"Summarize and tokenize https://symfony.com/blog/kicking-off-the-symfony-ai-initiative"

**Expected output:**
Symfony  
AI  
is  
a  
new  
initiative  
to  
integrate  
AI  
capabilities  
into  
PHP  
applications  
...

PROMPT;



$messageBag = new MessageBag(
    Message::ofUser('Summarize and tokenize https://symfony.com/blog/kicking-off-the-symfony-ai-initiative'),

    Message::forSystem($systemPrompt),
);

$result = $agent->call(messages: $messageBag);

echo $result->getContent();