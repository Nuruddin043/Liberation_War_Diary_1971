
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
);

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `section_name`  varchar(50) NOT NULL,
  `description` text,
  `user_id` int(11) NOT NULL,
  `approve_status` BOOLEAN,
  `view_count` int NOT NULL,
    PRIMARY KEY (`article_id`),
    FOREIGN KEY (`user_id`)
    REFERENCES users(`user_id`)
);

CREATE TABLE IF NOT EXISTS `photos` (
  `photos_id` int(11) NOT NULL AUTO_INCREMENT,
  `captions`  varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` LONGBLOB NOT NULL, 
  `approve_status` BOOLEAN,
  `view_count` int NOT NULL,
  PRIMARY KEY (`photos_id`),
  FOREIGN KEY (`user_id`)
  REFERENCES users(`user_id`)
);
CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
);

INSERT into admins(username,password) VALUES('admin','admin');

INSERT into users(name,email,password,gender) VALUES('nuruddin','nuruddin@gmail.com','nuruddin','male');
INSERT into users(name,email,password,gender) VALUES('didar','didar@gmail.com','didar','male');
INSERT into users(name,email,password,gender) VALUES('saidur','saidur@gmail.com','saidur','male');


INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('Operation Searchlight','march_june','Operation Searchlight was a planned military operation carried out by 
the Pakistan Army to curb the Bengali nationalist movement in the erstwhile East Pakistan in March 1971,[9][10] which the Pakistani state retrospectively
 justified on the basis of anti-Bihari violence by Bengalis in early March.[11][12] Ordered by the central government in West Pakistan, this was seen as 
 the sequel to "Operation Blitz" which had been launched in November 1970. The original plan envisioned taking control of all of East Pakistans major 
 cities on 26 March, and then eliminating all Bengali opposition, political or military,[13] within one month. Pakistani President Yahya Khan at a conference 
 in February 1971 said Kill three million of them and the rest will eat out of our hands.[14] Prolonged Bengali resistance was not anticipated by the Pakistani
  military leaders.[15] The main phase of Operation Searchlight ended with the fall of the last major Bengali-held town in mid-May. The operation also precipitated 
  the 1971 Bangladesh genocide, in which 300,000-3,000,000 civilians were killed and roughly 10 million refugees fled to India.[16][17] Bengali intelligentsia, academics
   and Hindus were targeted for the harshest treatment, with significant indiscriminate killing taking place. These systematic killings enraged the Bengalis, who declared
    independence from Pakistan, to establish the new nation of Bangladesh.[18]

The violence resulting from Operation Searchlight led to the Bangladesh Liberation War, in which Mukti Bahini fought to remove Pakistani "occupation" forces from Bangladesh.
 Following the ill-fated Operation Chengiz Khan, Indian intervention resulted in the Pakistan Armys unconditional surrender to the joint command of the Indian Army and Mukti 
 Bahini[19] on 16 December 1971.','1',TRUE,0);

INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('Declaration of independence','march_june','The violence unleashed by the Pakistani forces on 25 March 1971 proved the last straw to the efforts
 to negotiate a settlement. Following these incidents, Sheikh Mujibur Rahman signed an official declaration that read:

Today Bangladesh is a sovereign and independent country. On Thursday night, West Pakistani armed forces suddenly attacked the police barracks at 
Razarbagh and the EPR headquarters at Pilkhana in Dacca. Many innocent and unarmed have been killed in Dhaka city and other places of Bangladesh. 
Violent clashes between E.P.R. and Police on the one hand and the armed forces of Pakistan on the other, are going on. The Bengalis are fighting the enemy with great courage 
for an independent Bangladesh. May Allah aid us in our fight for freedom. Joy Bangla [May Bangladesh be victorious].

Sheikh Mujib also called upon the people to resist the occupation forces through a radio message. Rahman was arrested on the night of 25–26 March 1971 at 
about 1:30 am (as per Radio Pakistans news on 29 March 1971).

An iconic poster by Quamrul Hassan on General Yahya Khan, representing the Pakistani military junta as demons.[73]
A telegram containing the text of Sheikh Mujibur Rahmans declaration reached some students in Chittagong. The message was translated to Bengali by Dr. Manjula Anwar. The students failed to secure permission from higher authorities to broadcast the message from the nearby Agrabad Station of Pakistan Broadcasting Corporation. However, the message was read several times by the independent Swadhin Bangla Betar Kendro Radio established by some rebel Bangali Radio workers in Kalurghat. Major Ziaur Rahman was requested to provide security of the station and he also read the Declaration on 27 March 1971.[74] Major Ziaur Rahman broadcast announcement of the declaration of independence on behalf of Sheikh Mujibur Rahman.

This is Swadhin Bangla Betar Kendra. I, Major Ziaur Rahman, at the direction of Bangobondhu Mujibur Rahman, hereby declare that Independent Peoples Republic of Bangladesh has been established. At his direction, I have taken the command as the temporary Head of the Republic. In the name of Sheikh Mujibur Rahman, I call upon all Bengalees to rise against the attack by the West Pakistani Army. We shall fight to the last to free our motherland. Victory is, by the Grace of Allah, ours. Joy Bangla.[75]

The Kalurghat Radio Stations transmission capability was limited, but the message was picked up by a Japanese ship in the Bay of Bengal. It was then re-transmitted by Radio Australia[76] and later by the British Broadcasting Corporation.

M. A. Hannan, an Awami League leader from Chittagong, is said to have made the first announcement of the declaration of independence over the radio on 26 March 1971.[77]

26 March 1971 is considered the official Independence Day of Bangladesh, and the name Bangladesh was in effect henceforth. In July 1971, Indian Prime Minister
Indira Gandhi openly referred to the former East Pakistan as Bangladesh.[78] Some Pakistani and Indian officials continued to use the name "East Pakistan" until 16 December 1971.','1',TRUE,0);


INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('Surrender and aftermath','october_december','On 16 December 1971, Lt. Gen Amir Abdullah Khan Niazi, CO of Pakistan 
Army forces located in East Pakistan signed the Instrument of Surrender. At the time of surrender only a few countries had provided diplomatic recognition to the new nation. 
Over 93,000 Pakistani troops surrendered to the Indian forces and Bangladesh Liberation forces, making it the largest surrender since World War II,[8][104] although the Pakistani
 Army had fought gallantly according to Indian Army Chief Sam Manekshaw.[105] Bangladesh sought admission in the UN with most voting in its favour, but China vetoed this as Pakistan
  was its key ally.[106] The United States, also a key ally of Pakistan, was one of the last nations to accord Bangladesh recognition.[107] To ensure a smooth transition, in 1972 the
   Simla Agreement was signed between India and Pakistan. The treaty ensured that Pakistan recognised the independence of Bangladesh in exchange for the return of the Pakistani PoWs.
    India treated all the PoWs in strict accordance with the Geneva Convention, rule 1925.[108] It released more than 93,000 Pakistani PoWs in five months.[8] Further, as a gesture of
     goodwill, nearly 200 soldiers who were sought for war crimes by Bengalis were also pardoned by India. The accord also gave back 13,000 km2 (5,019 sq mi) of land that Indian troops
      had seized in West Pakistan during the war, though India retained a few strategic areas;[109] most notably Kargil (which would in turn again be the focal point for a war between 
      the two nations in 1999). This was done as a measure of promoting "lasting peace" and was acknowledged by many observers as a sign of maturity by India. However, some in 
      India[110] felt that the treaty had been too lenient to Bhutto, who had pleaded for leniency, arguing that the fragile democracy in Pakistan would crumble if the accord was 
      perceived as being overly harsh by Pakistanis.','3',TRUE,0);

INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('THE PROCLAMATION OF INDEPENDENCE','march_june','On 25 March 1971, negotiations between 
Pakistani President Yahya Khan and Awami League leader Sheikh Mujibur Rahman broke down after Khan refused to accept Rahmans plan for a new federal constitution in Pakistan. Rahmans
 party won an absolute majority in the National Assembly during Pakistans first free election in 1970. However, the newly elected parliament was barred from taking power due to 
 objections from the Pakistani military and the West Pakistan establishment. The Awami Leagues 6 points proposal for a Pakistani federation was strongly opposed by bureaucrats and 
 senior politicians like Zulfikar Ali Bhutto in West Pakistan. The League initiated a civil disobedience campaign in East Pakistan to press for convening the parliament, amid rising
  Bengali aspirations for self-determination and independence. On 7 March 1971, Rahman addressed a huge pro-independence rally in Dhaka. Yahya Khan and Bhutto were in the city throughout 
  March for negotiations. The political process was abruptly ended by President Khan, who faced pressure from the military for a crackdown.[7][page needed]

In the evening of 25 March, Mujib convened a meeting of senior Bengali nationalist leaders, including Tajuddin Ahmad and Colonel M A G Osmani, at his residence in Dhanmondi. 
They were briefed by Bengali insiders within the military of an impending crackdown. They implored Mujib to declare independence but Mujib declined to do so fearing he would 
be tried for treason. Tajuddin Ahmed even brought all the recording instruments but had failed to convince Mujib to record independence declaration. Rather Mujib ordered all 
the high ups to flee to India. However, Mujib decided to remain in Dhaka in hope of coming to a negotiated compromise with West Pakistan in becoming the Prime Minister of the
 whole Pakistan.

On the night of 25 March, the Pakistan Armed Forces launched Operation Searchlight in the capital of East Pakistan. Tanks rolled out on the streets of Dhaka.[8] The troops were
 said to have massacred students and intellectuals in Dhaka University, as well as many civilians in other parts of the city.[9] It set Hindu neighbourhoods ablaze and crushed
  resistance from the police and the East Pakistan Rifles.

Just before his arrest on the night of March 25, Sheikh Mujibur Rahman sent a message about attacks on EPR and police barracks in Dhaka, and declared the independence of 
Bangladesh. This message was broadcast from Swadhin Bangla Betar Kendro on March 26, 1971, and was widely reported in newspapers all around the world [10]. Major Ziaur Rahman,
 the commander of the East Bengal Regiment in Chittagong, went to the Radio station in Kalurghat, Chittagong on March 27 and declared independence of Bangladesh claiming himself 
 as state head of new Bangladesh. But soon after he realized that the political leader of Bangladesh was Sheikh Mujibur Rahman and so he corrected the declaration by adding that
  he was making the proclamation on behalf of Sheikh Mujib.


Zias broadcasts were picked by a Japanese ship anchored in Chittagong Port and transmitted to Radio Australia.[11]','3',FALSE,0);



INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('The Concert for Bangladesh','june_september','The Concert for Bangladesh (or Bangla Desh, as the countrys name was originally spelt)[1] was the name
 given to two benefit concerts organised by former Beatles lead guitarist George Harrison and Indian sitar master Ravi 

 Shankar. The concerts were held at 2:30 and 8:00 pm on Sunday, 1 August 1971, at Madison Square Garden in New York City.
  The shows were organised to raise international awareness and fund relief efforts for refugees from East Pakistan (now
   Bangladesh), following the Bangladesh Liberation War-related genocide. The concerts were followed by a bestselling live 
   lbum, a boxed three-record set, and Apple Films concert documentary, which opened in cinemas in the spring of 1972.

The event was the first-ever benefit concert of such a magnitude[2] and featured a supergroup of performers that included 
Harrison, fellow ex-Beatle Ringo Starr, Bob Dylan, Eric Clapton, Billy Preston, Leon Russell and the band Badfinger. In 
addition, Shankar and Ali Akbar Khan – both of whom had ancestral roots in Bangladesh – performed an opening set of Indian 
lassical music. Decades later, Shankar would say of the overwhelming success of the event: "In one day, the whole world 
knew the name of Bangladesh. It was a fantastic occasion."[3]

The concerts were attended by a total of 40,000 people, and raised close to $250,000 for Bangladesh relief, which was
 administered by UNICEF. Although the project was subsequently marred by financial problems – a result of the pioneering 
 nature of the venture – the Concert for Bangladesh is recognised as a highly successful and influential humanitarian aid 
 project, generating both awareness and considerable funds as well as providing valuable lessons and inspiration for
  projects that followed, notably Live Aid.[4][5][6] By 1985, through revenue raised from the Concert for Bangladesh
   live album and film, an estimated $12 million had been sent to Bangladesh in relief.[7]

Sales of the live album and DVD release of the film continue to benefit the George Harrison Fund for UNICEF.','2',TRUE,0);

INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('14 December executions
','october_december','As the war neared its end, a final effort to kill as many intellectuals as possible took place to 
eliminate the future leaders of the new nation of Bangladesh. This effort was mostly planned between 12 and 14 December.
[5] On 14 December 1971, over 200 of Bangladeshs intellectuals including professors, journalists, doctors, artists,
 engineers, and writers were abducted from their homes in Dhaka by the Al-Badr militia and the Pakistan Army. Notable
  novelist Shahidullah Kaiser and playwright Munier Choudhury were among the victims. They were taken blindfolded to 
  torture cells in Mirpur, Mohammadpur, Nakhalpara, Rajarbagh and other locations in different sections of the city. 
  Later they were executed en masse, most notably at Rayerbazar and Mirpur. In memory of the martyred intellectuals,
   14 December is mourned in Bangladesh as Shaheed Buddhijibi Dibosh, or Day of the Martyred Intellectuals.[6]

It is widely speculated that the killings of 14 December was orchestrated by Major General Rao Farman Ali. After the
 liberation of Bangladesh a list of Bengali intellectuals (most of whom were executed on 14 Dec) was discovered in a 
 page of his diary left behind at the Governors House. The existence of such a list was confirmed by Ali himself

  although he denied the motive of genocide. The same was also confirmed by Altaf Gauhar, a former Pakistani bureaucrat.
   He mentioned an incident in which Gauhar asked Ali to delete a friends name from the list and Ali did so in front 
   of him.[7]','2',TRUE,0);

INSERT into articles(title,section_name,description,user_id,approve_status,view_count) VALUES('International recognition of Bangladesh
','october_december','The Bangladesh Liberation War[a] (Bengali: মুক্তিযুদ্ধ Muktijuddho) was a revolutionary independence 
war in South Asia during 1971 which established the republic of Bangladesh.[3] The war pitted East Pakistan against West 
Pakistan, and lasted over a duration of nine months. It witnessed large-scale atrocities, the exodus of 10 million refugees
and the displacement of 30 million people.[4]

The war broke out on 26 March 1971, when the Pakistani Army launched a military operation called Operation Searchlight 
against Bengali civilians, students, intelligentsia and armed personnel, who were demanding that the Pakistani military 
junta accept the results of the 1970 first democratic elections of Pakistan, which were won by an eastern party, or to 
allow separation between East and West Pakistan. Bengali politicians and army officers announced the declaration of
 Bangladeshs independence in response to Operation Searchlight. Bengali military, paramilitary and civilians formed 
 the Mukti Bahini (Bengali: মুক্তি বাহিনী "Liberation Army"), which engaged in guerrilla warfare against Pakistani forces.
  The Pakistan Army, in collusion with religious extremist[5][6] militias (the Razakars, Al-Badr and Al-Shams), engaged 
  in the systematic genocide and atrocities of Bengali civilians, particularly nationalists, intellectuals, youth and
   religious minorities.[7][8][9][10][11] Bangladesh government-in-exile was set up in the city of Calcutta (now Kolkata) 

   in the Indian State of West Bengal.

India entered the war on 3 December 1971, after Pakistan launched pre-emptive air strikes on northern India.
 Overwhelmed by two war fronts, Pakistani defences soon collapsed. On 16 December, the Allied Forces of Bangladesh
  and India defeated Pakistan in the east. The subsequent surrender resulted in the largest number of prisoners-of-war 
  since World War II.','2',TRUE,0);


