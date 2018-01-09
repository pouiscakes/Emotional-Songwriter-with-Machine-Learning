import markovify

# Get raw text as string.
with open("merged_lyrics_unique.txt") as f:
    text = f.read()

# Build the model.
text_model = markovify.NewlineText(text)

# Print five randomly-generated sentences
for i in range(50):
    print(text_model.make_short_sentence(140,tries=100))