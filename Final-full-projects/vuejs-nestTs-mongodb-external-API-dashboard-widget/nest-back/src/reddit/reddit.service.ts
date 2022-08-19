import { Injectable } from '@nestjs/common';
import axios from 'axios';

@Injectable()
export class RedditService {
  async reddit(key: string) {
    let res = await axios.get(
      'https://www.reddit.com/r/pics/search.json?q=' + key + '&sort=new',
    );
    let file = res.data.data.children;
    let files = file.map((child) => {
      return {
        subreddit: child.data.subreddit,
        selftext: child.data.selftext,
        title: child.data.title,
        author: child.data.author_fullname,
        ups: child.data.ups,
        downs: child.data.downs,
      };
    });
    return files;
  }
}
